#!/usr/bin/env bash
#
# Report every way the getgrav/Twig fork diverges from upstream, and run the
# Grav core tests that pin those divergences against the fork's current code.
#
# Usage: grav-fork-check.sh [fork-repo] [grav-core-repo]

set -uo pipefail

FORK="${1:-$HOME/Projects/grav/Twig}"
CORE="${2:-$HOME/Projects/grav/grav}"
UPSTREAM_BRANCH="${UPSTREAM_BRANCH:-upstream/3.x}"

fail=0

if ! git -C "$FORK" rev-parse --git-dir >/dev/null 2>&1; then
  echo "!! not a git repo: $FORK" >&2
  exit 2
fi

echo "== fork: $FORK"
git -C "$FORK" fetch upstream --quiet 2>/dev/null || echo "   (could not fetch upstream; comparing against the last fetch)"
echo "   HEAD      $(git -C "$FORK" log --oneline -1)"
echo "   upstream  $(git -C "$FORK" log --oneline -1 "$UPSTREAM_BRANCH" 2>/dev/null || echo 'MISSING')"
echo

base=$(git -C "$FORK" merge-base HEAD "$UPSTREAM_BRANCH" 2>/dev/null)
if [ -z "$base" ]; then
  echo "!! no merge base with $UPSTREAM_BRANCH; add the upstream remote first:" >&2
  echo "   git -C $FORK remote add upstream https://github.com/twigphp/Twig.git" >&2
  exit 2
fi

echo "== divergences in src/ (merge-base ${base:0:9})"
if ! git -C "$FORK" diff --quiet "$base" HEAD -- src/; then
  git -C "$FORK" diff --stat "$base" HEAD -- src/ | sed 's/^/   /'
else
  echo "   !! NONE. Every Grav patch is gone. This is never correct." >&2
  fail=1
fi
echo
echo "   Read every hunk below and confirm each is a patch you meant to keep:"
echo "   git -C $FORK diff $base HEAD -- src/"
echo

echo "== GRAV FORK markers"
markers=$(git -C "$FORK" grep -n "GRAV FORK" -- src/ 2>/dev/null)
if [ -n "$markers" ]; then
  echo "$markers" | sed 's/^/   /'
else
  echo "   !! no 'GRAV FORK' comments found in src/. A re-sync probably dropped them." >&2
  fail=1
fi
echo

echo "== Grav core tests that pin the fork patches"
if [ ! -f "$CORE/vendor/twig/twig/src/Parser.php" ]; then
  echo "   !! $CORE has no vendored twig. Run: composer update twig/twig" >&2
  exit 2
fi
vendored=$(grep -m1 "public const VERSION " "$CORE/vendor/twig/twig/src/Environment.php" | sed "s/.*'\(.*\)'.*/\1/")
echo "   vendored Twig: $vendored"
echo "   (if that is not the fork commit you just pushed, run 'composer update twig/twig' in $CORE first)"
echo
for t in TwigForkPatchesTest TwigConditionalBlockTest DeferredExtensionTest TwigAutoescapeCompatTest TwigSetEscaperCompatTest Sandbox/SourceSandboxCompilationTest; do
  f="$CORE/tests/unit/Grav/Common/Twig/$t.php"
  if [ ! -f "$f" ]; then
    echo "   !! MISSING $t" >&2
    fail=1
    continue
  fi
  if (cd "$CORE" && php -d register_argc_argv=On vendor/bin/codecept run unit "tests/unit/Grav/Common/Twig/$t.php" >/dev/null 2>&1); then
    echo "   ok    $t"
  else
    echo "   FAIL  $t" >&2
    fail=1
  fi
done
echo

echo "== reconcile by hand"
echo "   Every divergence listed above needs a case in TwigForkPatchesTest.php."
echo "   A green suite only proves the divergences someone already wrote a test for."
echo "   A patch can survive as a diff while being re-homed WRONGLY onto rewritten"
echo "   upstream code, which is exactly how getgrav/grav#4256 shipped."

exit $fail
