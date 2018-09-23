<?php

declare(strict_types=1);

namespace PhantasyLand\Spec\Derivations;
use PhantasyLand\Spec as PL;

trait apFromChain
{
    /**
     * @param Apply $b
     *
     * @return Apply
     */
    public function ap(PL\Apply $b): PL\Apply {
        $_this = $this;
        return $b->chain(function ($f) use($_this) { return $_this->map($f); });
    }
}
