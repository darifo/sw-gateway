<?php


namespace Darifo\Gateway;

use Darifo\Gateway\Component\Singleton;
use Darifo\Gateway\Http\HttpServer;


class Core
{
    use Singleton;


    function initialize()
    {
        return $this;
    }

    function createServer(): bool
    {
        $conf = Config::getInstance()->getConf();

        HttpServer::getInstance()->create(
            $conf['PORT'],
            $conf['LISTEN_ADDRESS'],
            $conf['SETTING'],
            $conf['RUN_MODEL'],
            $conf['SOCK_TYPE']
        );
        return true;
    }

    function start()
    {
        HttpServer::getInstance()->start();
    }
}