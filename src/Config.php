<?php


namespace Darifo\Gateway;


use Darifo\Gateway\Component\Singleton;

class Config
{
    use Singleton;

    function getConf()
    {
        return require_once GATEWAY_ROOT . 'App/Config.php';
    }
}