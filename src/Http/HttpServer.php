<?php


namespace Darifo\Gateway\Http;


use Darifo\Gateway\Component\Singleton;

class HttpServer
{
    private $server;

    use Singleton;

    function create($port, $address = '0.0.0.0', array $setting = [], ...$args)
    {
        $this->server = new \Swoole\Http\Server($address,$port,...$args);
        if ($this->server) {
            $this->server->set($setting);
        }
        return true;
    }

    function start()
    {
        $this->server->on('request', function ($request, $response) {
            var_dump($request->get, $request->post);
            $response->header("Content-Type", "text/html; charset=utf-8");
            $response->end("<h1>Hello Swoole. #".rand(1000, 9999)."</h1>");
        });
        $this->server->start();
    }
}