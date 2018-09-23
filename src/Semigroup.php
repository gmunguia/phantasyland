<?php

declare(strict_types=1);

namespace PhantasyLand\Spec;

interface Semigroup
{
    /**
     * @param Semigroup $b
     *
     * @return Semigroup
     */
    public function concat(Semigroup $b): Semigroup;
}
