# getgrav/Twig — a patched fork, not a mirror

This repo is Grav's fork of twigphp/Twig. It tracks upstream `3.x` closely and is re-synced wholesale, but it carries a small set of **deliberate patches that Grav will break without**. The whole risk of this repo is that a sync quietly drops one, or re-homes one onto rewritten upstream code so it still looks present but no longer works.

That is not hypothetical. It is exactly how [getgrav/grav#4256](https://github.com/getgrav/grav/issues/4256) shipped: upstream 3.27 replaced the recursive `Parser::filterBodyNodes()` with the flat `Parser::cleanupBodyForChildTemplates()`, the Grav patch was carried across onto the new method, and the re-home missed one case. The diff still showed a Grav patch in `Parser.php`, the fork's own test suite was green, and every form field on every Grav 2.0.20 site printed its HTML attributes as visible text.

Grav pulls this fork by **branch, not tag**: core's `composer.json` says `"twig/twig": "3.x-dev"`, with the repo declared under `repositories`. Pushing `3.x` is all that is needed for composer to pick a change up. **Never tag this repo** for a Grav release; `composer.lock` pins the commit.

## The patches

Run `./grav-fork-check.sh` for the live list. As of 2026-09-29 there are four, all in `src/` (the fourth spans several files):

| File | Patch | How it fails if lost |
| --- | --- | --- |
| `Extension/EscaperExtension.php` | Class is **not final** (upstream made it final in 3.10) | **Silently.** `Grav\Common\Twig\TwigEnvironment::getExtension()` returns a subclass shimming the pre-3.9 `setEscaper()` call site, and it guards with `isFinal()` — so restoring `final` just stops the shim, with no error. |
| `NodeVisitor/CorrectnessNodeVisitor.php` | `isTransparentTag()` lets a `block` definition sit under an `if` | Loudly: `SyntaxError`, "A block definition cannot be nested under non-capturing nodes." |
| `Parser.php` | `cleanupTransparentBodyNodes()` strips those nested block references from a child template's body | Quietly wrong output: the block renders where it was declared *as well as* through the parent. |
| `Sandbox/CompileTimeSourcePolicyInterface.php` (new), `Sandbox/SecurityChecker.php`, `NodeVisitor/SandboxNodeVisitor.php`, `Node/TrustedTemplateGuardNode.php` (new), `Environment.php` (`getTemplateClass()`), `Template.php`, `MacroNamespace.php`, `Node/Expression/GetAttrExpression.php`, `CallExpression.php`, `Binary/HasSomeBinary.php`, `Binary/HasEveryBinary.php`, `Binary/ObjectDestructuringSetBinary.php` | Opt-in compile-time source sandboxing: a template whose source policy says it is trusted compiles with no sandbox instrumentation at all | Depends on which hunk goes; see below. |

Every patch is marked with a `GRAV FORK:` comment explaining what depends on it. **Keep that convention** — the check script greps for those markers, and a marker is the only thing telling the next person why an innocuous-looking line matters.

Two of these patches must also stay **narrow**, and that is as easy to break as losing them:

- Only `if` is transparent. A `block` under `for`, `embed`, etc. must still be a parse error.
- Capturing tags such as `set` are left alone, because a block legitimately *does* render in place there. Grav's form plugin builds its field classes that way, so over-stripping would silently empty them.

## Compile-time source sandboxing

Grav registers the `SandboxExtension` with a source policy (`GravSourcePolicy`) that sandboxes only editor content (`@Page:`, `@Var:`, `@EmailVar:`). Upstream instruments every template anyway and decides at runtime, so theme and plugin templates made thousands of policy calls per page and never failed one. With this patch, a source policy that implements `Twig\Sandbox\CompileTimeSourcePolicyInterface` (instead of the plain, upstream-deprecated `SourcePolicyInterface`) lets the decision happen once, at compile time. Without that interface nothing changes: class names, compiled code and runtime behaviour are upstream's.

How it works, hunk by hunk:

- `SecurityChecker::isTrustedAtCompileTime()` is true only when the policy opted in, the sandbox is off (not global, runtime flag off), `enableSandbox()` is false and the policy's `isTrusted()` is true.
- `SandboxNodeVisitor` asks that once per `ModuleNode` (and says no if the template contains a `{% sandbox %}` tag). A trusted module gets no `CheckSecurityNode`/`CheckToStringNode`, only `CheckSecurityCallNode` plus `TrustedTemplateGuardNode`, and every `GetAttrExpression`, `CallExpression`, `HasSomeBinary`, `HasEveryBinary` and `ObjectDestructuringSetBinary` in it gets a `sandbox_trusted` attribute, which those nodes read to compile their own check away.
- Except inside arrow function bodies. A closure is the one piece of a trusted template that can run inside a sandboxed render without passing the guard (handed to a sandboxed include as a variable), so arrow bodies keep their `CheckToStringNode` wrapping and unmarked nodes, exactly as upstream compiles them.
- `TrustedTemplateGuardNode` compiles two methods into a trusted template. `ensureSecurityCheckedOrHandOver()` returns null while the sandbox is off and, while it is on, the fully checked variant of the same template: `Template::loadSecurityCheckedTemplate()` loads it again by name (and embed index) through `Environment::loadTemplate()`, so with the runtime flag on it gets the `_sandboxed` class. When there is no such variant (a string template cannot be loaded again by name) it throws. `ensureSecurityChecked()` still throws a `SecurityError` while the sandbox is on, as the backstop.
- `Template.php` and `MacroNamespace.php` call `ensureSecurityCheckedOrHandOver()` everywhere upstream calls `ensureSecurityChecked()` (the base version runs `ensureSecurityChecked()` and returns null), and run the returned variant instead, calling the same method on it, so the render matches upstream Twig, with every runtime check: `Template::yield()` (and `display()`/`render()`, built on it) before merging `$blocks`, `yieldBlock()` (swaps the block's `$template`; both compiled classes name block methods `block_<name>`), the part of `getParent()` that evaluates the parent expression, and `MacroNamespace::getDeclared()` for macros. A parent `getParent()` already resolved is returned as is, since that runs no code and anything run on it hands over in turn. Everything else (`yieldParentBlock()`, `hasBlock()`, `getBlockNames()`, `BlockChain`, `TemplateWrapper`, the `include` and `block` functions) only dispatches to those.
- A checked variant never hands over again (it does not override `ensureSecurityCheckedOrHandOver()`, and the loader refuses to return the same class). Trusted templates with the sandbox off cost exactly what they did before: one `isSandboxed()` call per entry point. Templates compiled the upstream way pay one extra method call.
- `Environment::getTemplateClass()` appends `SecurityChecker::getTemplateClassSuffix()`: `_sourced` normally, `_sandboxed` while the runtime flag is on, empty without the opt-in. So a template loaded inside a sandboxed render compiles into its own, fully checked class, and no class compiled without the opt-in is reused. Since 3.30, `Environment::load()` also caches the `TemplateWrapper` per class name; that key includes the suffix, so a wrapper loaded outside the sandbox is never returned inside it.

How each piece fails if a sync drops or mis-homes it:

- The interface: `GravSourcePolicy` fails to load. Loud.
- `isTrustedAtCompileTime()` / `getTemplateClassSuffix()`: undefined method on first compile. Loud.
- The visitor hunk: every template is instrumented again, as upstream does. Safe, just slower; the Grav tests asserting that trusted code has no checks fail.
- A node's `sandbox_trusted` read: that node keeps its check in trusted templates. Safe, slower, and the fork's `tests/Sandbox/CompileTimeSourcePolicyTest.php` fails.
- The `getTemplateClass()` suffix: a trusted class gets reused inside sandboxed renders and has no checked variant to hand over to, so `{% sandbox %}` / `include(..., sandboxed = true)` of an already loaded theme template throws instead of rendering. Loud, fails closed.
- A hand-over in `Template.php` or `MacroNamespace.php`: re-homed as upstream's plain `ensureSecurityChecked()`, that entry point throws where it used to render with checks. Loud, fails closed; the `testPreloaded*` tests here and in Grav's `SourceSandboxCompilationTest` fail.
- **`TrustedTemplateGuardNode`: silent and unsafe.** A trusted template loaded before a sandboxed render then runs unchecked inside it. Pinned by the `testPreloaded*` tests (a disallowed method, property, filter, function or `__toString()` must still be blocked) and `testBackstopStillThrows` here, and the matching tests in Grav's `SourceSandboxCompilationTest`.

Keep it narrow:

- Never trust anything while the runtime flag or global sandbox is on; that is what keeps `{% sandbox %}` and sandboxed includes fully checked.
- Keep the arrow function exception. Without it, a closure from a theme template passed into a sandboxed include reads properties and calls `__toString()` unchecked (`testArrowFunctionFromATrustedTemplateIsCheckedInsideTheSandbox`).
- Keep the throw in the guard's `ensureSecurityChecked()`. The hand-over covers every entry point Twig has today; one a future upstream sync adds must fail closed until it is taught to hand over too. After a sync, grep `src/` for new callers of `ensureSecurityChecked()` (each should become `ensureSecurityCheckedOrHandOver()`) and for new ways into block and macro methods.
- A node without the attribute must compile the upstream check. The attribute only ever removes checks for nodes the visitor saw inside a trusted module.
- The trust decision is baked into compiled templates, so a policy's `isTrusted()` may depend on the `Source` only. If Grav ever changes which names it sandboxes, the compiled Twig cache must be cleared.

Upstream deprecated `SourcePolicyInterface` in 3.27 with no replacement and, in 3.29, made the `SandboxExtension` internal in favour of `Twig\Sandbox\Sandbox`, a separate, always-sandboxed environment for untrusted templates. That model cannot express Grav's "editor content may `{% include %}` a trusted theme partial", so this patch is fork-only and has to be carried as long as Grav keeps the source policy. The 3.30 rewrite of `doc/sandbox.rst` no longer mentions `SourcePolicyInterface` or the `sandboxed` include argument except as deprecated, and says a `SecurityPolicy` should be strict; nothing in it changes what this patch has to do.

## After every upstream sync

```bash
./grav-fork-check.sh                       # or: ./grav-fork-check.sh <fork> <grav-core>
```

It fetches upstream, prints the full `src/` divergence, lists the `GRAV FORK` markers, and runs the Grav core tests that pin the patches. Then, by hand:

1. **Read every hunk** of `git diff $(git merge-base HEAD upstream/3.x) HEAD -- src/`. Confirm each is a patch you meant to keep and that it still does what its `GRAV FORK` comment claims, against the *current* upstream code around it.
2. **Run this repo's suite** — `vendor/bin/simple-phpunit`. The Grav-specific fixtures live in `tests/Fixtures/tags/inheritance/conditional_block*.test`.
3. **Point Grav core at the new commit and run its unit suite.** In the core repo: `composer update twig/twig && php -d register_argc_argv=On vendor/bin/codecept run unit`. This is the step that catches a bad re-home; nothing in this repo can.
4. **Reconcile `TwigForkPatchesTest.php`** in core (`tests/unit/Grav/Common/Twig/`) against the divergence list. Any patch without a case there is unguarded. Depth for the parser patches lives in `TwigConditionalBlockTest.php` and `DeferredExtensionTest.php`; depth for compile-time source sandboxing lives in `Sandbox/SourceSandboxCompilationTest.php`, and here in `tests/Sandbox/CompileTimeSourcePolicyTest.php`.

A green suite only proves the divergences someone already wrote a test for. If the sync introduces a *new* patch, it needs a new test in the same pass, or the next sync inherits the same blind spot.

## Things worth knowing

- Deferred blocks ride the parser patch too: `DeferredTokenParser` (vendored in Grav core, not here) returns a plain `BlockReferenceNode`, so anything affecting block references affects `{% block x deferred %}`.
- Twig 3.28 deprecates `extends` and `use` anywhere but a template's root, and Twig 4 rejects them. Grav templates have been fixed for this; if a sync turns that deprecation into an error, that is upstream working as announced, not a regression here.
