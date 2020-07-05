<?php


namespace Darifo\Gateway\Command\Command;


use Darifo\Gateway\Command\CommandInterface;
use Darifo\Gateway\Core;

class Start implements CommandInterface
{

    public function commandName(): string
    {
        // TODO: Implement commandName() method.
        return 'start';
    }

    public function exec(array $args): ?string
    {
        // TODO: Implement exec() method.
        Core::getInstance()->initialize()->createServer();
        Core::getInstance()->start();
        return 'service start success';
    }

    public function help(array $args): ?string
    {
        // TODO: Implement help() method.

        return 'start help';
    }
}