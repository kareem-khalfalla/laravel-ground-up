<?php

namespace App;

class Postcard
{
    /**
     * resolveFacade
     *
     * @param  string $name
     * @return mixed
     */
    protected static function resolveFacade(string $name): mixed
    {
        return app()[$name];
    }

    /**
     * __callStatic
     *
     * @param  mixed $method
     * @param  mixed $args
     * @return void
     */
    public static function __callStatic($method, $args)
    {
        return (self::resolveFacade('Postcard'))->$method(...$args);
    }
}
