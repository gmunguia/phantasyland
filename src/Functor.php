<?php

declare(strict_types=1);

namespace PhantasyLand\Spec;

interface Functor
{
    /**
     * @param callable $f
     *
     * @return Functor
     */
    public function map(callable $f): Functor;
}
