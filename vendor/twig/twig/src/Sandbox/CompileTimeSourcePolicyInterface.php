<?php

/*
 * This file is part of Twig.
 *
 * (c) Fabien Potencier
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Twig\Sandbox;

use Twig\Source;

/**
 * GRAV FORK: opt-in compile-time source sandboxing. Not in upstream Twig.
 *
 * A source policy that implements this interface (instead of the plain
 * SourcePolicyInterface) lets the SandboxExtension decide once, when a template
 * compiles, that the template is trusted. A trusted template is compiled with no
 * sandbox instrumentation at all: no tag/filter/function check, no __toString()
 * check on prints, and plain attribute and method access, exactly as if the
 * SandboxExtension were not registered. The exception is the body of an arrow
 * function, which keeps its per-value checks because a closure can be handed
 * to a template rendered inside the sandbox. Every other template is compiled
 * the upstream way and keeps its runtime checks.
 *
 * A template is trusted only when all of these hold while it compiles:
 *
 *  - the sandbox is not enabled globally and the runtime sandbox flag is off
 *    (the `sandbox` tag and `include(..., sandboxed = true)` turn it on);
 *  - enableSandbox() returns false for its source;
 *  - isTrusted() returns true for its source;
 *  - it does not contain a `sandbox` tag.
 *
 * Templates loaded while the runtime flag is on get their own compiled class
 * (see Environment::getTemplateClass()), so they are never trusted. A trusted
 * template that was loaded earlier hands a render while the flag is on over to
 * that fully checked class instead of running unchecked, and throws where it
 * cannot (see TrustedTemplateGuardNode).
 *
 * Grav depends on this: Grav\Common\Twig\Sandbox\GravSourcePolicy implements it
 * so theme and plugin templates on disk skip the thousands of sandbox calls per
 * page they would never fail. If this fork patch is lost, GravSourcePolicy
 * fails to load (the interface is missing), which is loud.
 */
interface CompileTimeSourcePolicyInterface extends SourcePolicyInterface
{
    /**
     * Whether a template compiled from this source can skip every sandbox check.
     *
     * Only asked when the sandbox is off and enableSandbox() returned false for
     * the same source. The answer is baked into the compiled template, so it must
     * depend on the Source alone and stay stable for as long as compiled
     * templates are cached. Return false for sources that may be loaded first
     * and rendered later while the runtime sandbox flag is on (for instance
     * templates created from a string and passed to a sandboxed include): they
     * then keep their runtime checks instead of refusing to render.
     */
    public function isTrusted(Source $source): bool;
}
