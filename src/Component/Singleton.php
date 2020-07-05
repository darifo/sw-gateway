<?php


namespace Darifo\Gateway\Component;


trait Singleton
{
    private static Singleton $instance;

    static function getInstance(...$args)
    {
        if(!isset(self::$instance)){
            self::$instance = new static(...$args);
        }
        return self::$instance;
    }
}