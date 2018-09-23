<?php

declare(strict_types=1);

namespace PhantasyLand\Spec;

interface Foldable
{
    /**
     * @param callable $f
     * @param mixed $x
     *
     * @return mixed
     */
    public function reduce(callable $f, $x);
}
