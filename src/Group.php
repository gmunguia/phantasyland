<?php

declare(strict_types=1);

namespace PhantasyLand\Spec;

interface Group extends Monoid
{
    /**
     * @return Group
     */
    public function invert(): Group;
}
