<?php

declare(strict_types=1);

namespace PhantasyLand\Spec;

interface Applicative extends Apply
{
    /**
     * @param mixed $x
     *
     * @return Applicative
     */
    public static function of($x): Applicative;
}
