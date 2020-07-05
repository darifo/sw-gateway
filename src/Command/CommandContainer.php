<?php


namespace Darifo\Gateway\Command;


use Darifo\Gateway\Component\Singleton;

class CommandContainer
{
    use Singleton;

    private $container = [];

    public function set(CommandInterface $command,$cover = false)
    {
        if(!isset($this->container[strtolower($command->commandName())]) || $cover){
            $this->container[strtolower($command->commandName())] = $command;
        }
    }

    function get($key): ?CommandInterface
    {
        $key = strtolower($key);
        if (isset($this->container[$key])) {
            return $this->container[$key];
        } else {
            return null;
        }
    }

    function getCommandList()
    {
        return array_keys($this->container);
    }

    function hook($commandName, array $args):?string
    {
        $handler = $this->get($commandName);
        if($handler){
            return $handler->exec($args);
        }
        return null;
    }
}