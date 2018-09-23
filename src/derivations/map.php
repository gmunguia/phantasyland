<?php

declare(strict_types=1);

namespace PhantasyLand\Spec\Derivations;
use PhantasyLand\Spec as PL;

trait mapFromApplicative
{
    /**
     * @param callable $f
     *
     * @return Functor
     */
    public function map(callable $f): PL\Functor {
        return $this->ap(static::of($f));
    }
}

trait mapFromMonad
{
    /**
     * @param callable $f
     *
     * @return Functor
     */
    public function map(callable $f): PL\Functor {
        return $this->chain(function ($a) use($f) {
            return static::of($f($a));
        });
    }
}

trait mapFromBifunctor
{
    /**
     * @param callable $f
     *
     * @return Functor
     */
    public function map(callable $f): PL\Functor {
        return $this->bimap(function ($a) { return $a; }, $f);
    }
}

trait mapFromProfunctor
{
    /**
     * @param callable $f
     *
     * @return Functor
     */
    public function map(callable $f): PL\Functor {
        return $this->promap(function ($a) { return $a; }, $f);
    }
}
