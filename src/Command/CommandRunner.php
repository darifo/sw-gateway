<?php


namespace Darifo\Gateway\Command;


use Darifo\Gateway\Command\Command\Install;
use Darifo\Gateway\Command\Command\Start;
use Darifo\Gateway\Component\Singleton;

class CommandRunner
{
    use Singleton;

    function __construct()
    {
        CommandContainer::getInstance()->set(new Install());
        CommandContainer::getInstance()->set(new Start());
    }

    function run(array $args):?string
    {
        $command = array_shift($args);
        if(empty($command)){
            $command = 'help';
        }
        if(!CommandContainer::getInstance()->get($command)){
            $command = 'help';
        }
        return CommandContainer::getInstance()->hook($command,$args);
    }

}