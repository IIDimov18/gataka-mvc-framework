<?php


namespace GF;


final class Loader
{
    private function __construct()
    {

    }

    public static function registerAutoLoad(){
        spl_autoload_register(array("\GF\Loader",'autoload'));
    }

    public static function autoload($class)
    {
        self::loadClass($class);
    }
}
