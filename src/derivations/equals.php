<?php

declare(strict_types=1);

namespace PhantasyLand\Spec\Derivations;
use PhantasyLand\Spec as PL;

trait equalsFromOrd
{
    /**
     * @param Setoid $b
     *
     * @return bool
     */
    public function equals(PL\Setoid $b): bool {
        return $this->lte($b) && $b->lte($this);
    }
}
