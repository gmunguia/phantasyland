<?php

declare(strict_types=1);

namespace PhantasyLand\Spec;

interface Setoid
{
    /**
     * @param Setoid $b
     *
     * @return bool
     */
    public function equals(Setoid $b): bool;
}
