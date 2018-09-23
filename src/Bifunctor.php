<?php

declare(strict_types=1);

namespace PhantasyLand\Spec;

interface Bifunctor extends Functor
{
    /**
     * @param callable $f
     * @param callable $g
     *
     * @return Bifunctor
     */
    public function bimap(callable $f, callable $g): Bifunctor;
}
