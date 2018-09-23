<?php

declare(strict_types=1);

namespace PhantasyLand\Spec;

interface Contravariant
{
    /**
     * @param callable $f
     *
     * @return Contravariant
     */
    public function contramap(callable $f): Contravariant;
}
