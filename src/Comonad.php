<?php

declare(strict_types=1);

namespace PhantasyLand\Spec;

interface Comonad extends Extend
{
    /**
     * @return mixed
     */
    public function extract();
}
