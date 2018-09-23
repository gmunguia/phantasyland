<?php

declare(strict_types=1);

namespace PhantasyLand\Spec;

interface Profunctor extends Functor
{
    /**
     * @param callable $f
     * @param callable $g
     *
     * @return Profunctor
     */
    public function promap(callable $f, callable $g): Profunctor;
}
