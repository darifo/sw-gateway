<?php


namespace Darifo\Gateway\Command\Command;


use Darifo\Gateway\Command\CommandContainer;
use Darifo\Gateway\Command\CommandInterface;

class Help implements CommandInterface
{

    public function commandName(): string
    {
        // TODO: Implement commandName() method.
        return 'help';
    }

    public function exec(array $args): ?string
    {
        // TODO: Implement exec() method.
        if (!isset($args[0])) {
            return $this->help($args);
        } else {
            $actionName = $args[0];
            array_shift($args);
            $call = CommandContainer::getInstance()->get($actionName);
            if ($call instanceof CommandInterface) {
                return $call->help($args);
            } else {
                return "no help message for command {$actionName} was found";
            }
        }
    }

    public function help(array $args): ?string
    {
        // TODO: Implement help() method.
        return 'gateway help';
    }
}