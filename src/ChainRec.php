<?php

declare(strict_types=1);

namespace PhantasyLand\Spec;

interface ChainRec extends Chain
{
    /**
     * @param callable $f
     * @param mixed $i
     *
     * @return ChainRec
     */
    public function chainRec(callable $f, $i): ChainRec;
}
