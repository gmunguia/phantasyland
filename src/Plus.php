<?php

declare(strict_types=1);

namespace PhantasyLand\Spec;

interface Plus extends Alt
{
    /**
     * @return Plus
     */
    public function zero(): Plus;
}
