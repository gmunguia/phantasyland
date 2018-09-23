<?php

declare(strict_types=1);

namespace PhantasyLand\Spec;

interface Monoid extends Semigroup
{
    /**
     * @return Monoid
     */
    public static function mempty(): Monoid;
}
