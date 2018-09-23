<?php

declare(strict_types=1);

namespace PhantasyLand\Spec;

interface Filterable
{
    /**
     * @param callable $p
     *
     * @return Filterable
     */
    public function filter(callable $p): Filterable;
}
