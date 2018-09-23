<?php

declare(strict_types=1);

namespace PhantasyLand\Spec;

interface Ord extends Setoid
{
    /**
     * @param Ord $b
     *
     * @return bool
     */
    public function lte(Ord $b): bool;
}
