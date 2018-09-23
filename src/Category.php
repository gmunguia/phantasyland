<?php

declare(strict_types=1);

namespace PhantasyLand\Spec;

interface Category extends Semigroupoid
{
    /**
     * @return Category
     */
    public static function id(): Category;
}
