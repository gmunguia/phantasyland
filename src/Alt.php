<?php

declare(strict_types=1);

namespace PhantasyLand\Spec;

interface Alt extends Functor
{
    /**
     * @param Alt $b
     *
     * @return Alt
     */
    public function alt(Alt $b): Alt;
}
