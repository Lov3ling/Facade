<?php

namespace Ysandreew\Facade;

abstract class Facade
{
    public static $object;

    public function __construct()
    {
        static::register();
    }

    public static function register()
    {
        static::$object=static ::getFacadeAccessor();
    }

    abstract public static function getFacadeAccessor();


    public static function __callStatic($method,$args)
    {
        return call_user_func_array([static::$object,$method],$args);
    }


    public function __call($method,$args)
    {
        return call_user_func_array([static::$object,$method],$args);
    }

}