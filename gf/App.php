<?php

namespace GF;
class App
{
    private static $_instance=null;

    public function run(){
        echo "okkkk";
    }

    /**
     * @return \GF\App
     */
    public static function getInstance(){
        if(self::$_instance==null){
           self::$_instance = new \GF\App();
        }

        return self::$_instance;
    }
}
