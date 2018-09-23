<?php

declare(strict_types=1);

namespace PhantasyLand\Spec;

interface Chain extends Apply
{
    /**
     * @param callable $f
     *
     * @return Chain
     */
    public function chain(callable $f): Chain;
}
