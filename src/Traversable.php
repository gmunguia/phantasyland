<?php

declare(strict_types=1);

namespace PhantasyLand\Spec;

interface Traversable extends Functor, Foldable
{
    /**
     * @param callable $f
     *
     * @return Applicative
     */
    public function traverse(callable $f): Applicative;
}
