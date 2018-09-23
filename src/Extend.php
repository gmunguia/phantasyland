<?php

declare(strict_types=1);

namespace PhantasyLand\Spec;

interface Extend extends Functor
{
    /**
     * @param callable $f
     *
     * @return Extend
     */
    public function extend(callable $f): Extend;
}
