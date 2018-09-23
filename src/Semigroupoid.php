<?php

declare(strict_types=1);

namespace PhantasyLand\Spec;

interface Semigroupoid
{
    /**
     * @param Semigroupoid $b
     *
     * @return Semigroupoid
     */
    public function compose(Semigroupoid $b): Semigroupoid;
}
