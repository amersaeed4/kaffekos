<?php

/*
 * This file is part of Twig.
 *
 * (c) Fabien Potencier
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Twig\Node\Expression\Binary;

use Twig\Compiler;
use Twig\Node\Expression\ReturnBoolInterface;

class HasEveryBinary extends AbstractBinary implements ReturnBoolInterface
{
    public function compile(Compiler $compiler): void
    {
        $compiler
            ->raw('CoreExtension::arrayEvery($this->env, ')
            ->subcompile($this->getNode('left'))
            ->raw(', ')
            ->subcompile($this->getNode('right'))
            ->raw(', ')
        ;

        // GRAV FORK: compile-time source sandboxing (see CompileTimeSourcePolicyInterface), a trusted
        // template is never sandboxed. If lost, trusted templates keep the check (slower, still safe).
        if ($this->hasAttribute('sandbox_trusted')) {
            $compiler->raw('false)');

            return;
        }

        $compiler
            ->raw('$this->env->hasExtension(\Twig\Extension\SandboxExtension::class) && $this->env->getExtension(\Twig\Extension\SandboxExtension::class)->getChecker()->isSandboxed($this->source))')
        ;
    }

    public function operator(Compiler $compiler): Compiler
    {
        return $compiler->raw('');
    }
}
