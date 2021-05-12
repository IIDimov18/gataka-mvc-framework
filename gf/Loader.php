<?php


namespace GF;


final class Loader
{
    public static $namespace =array();
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

    public static function registerNamespace($namespace, $path){
        $namespace = trim($namespace);
        if(strlen($namespace)>0){
            if(!$path){
                throw new \Exception('Invalid path');
            }
            $_path=realpath($path);
            if($_path && is_dir($path)&&is_readable($path)){
                self::$namespace[$namespace]=$_path. DIRECTORY_SEPARATOR;
            }else{
                //TODO
                throw new \Exception('Namespace directory read error:'.$path);
            }
        }else{
            //TODO
            throw new \Exception('Invalid namespace:'.$namespace);
        }
    }
}
