<?php


namespace Darifo\Gateway\Command\Command;


use Darifo\Gateway\Command\CommandInterface;
use Darifo\Gateway\Utility\FileUtility;

class Install implements CommandInterface
{
    public function commandName(): string
    {
        // TODO: Implement commandName() method.
        return 'install';
    }

    public function exec(array $args): ?string
    {
        // TODO: Implement exec() method.
        if(is_file(GATEWAY_ROOT . '/gateway')){
            unlink(GATEWAY_ROOT . '/gateway');
        }
        file_put_contents(GATEWAY_ROOT . '/gateway',file_get_contents(__DIR__.'/../../../bin/gateway'));
        FileUtility::copyFile(__DIR__ . '/../../Resource/Config.php', GATEWAY_ROOT . 'App/Config.php');
        return 'success installed !';
    }

    public function help(array $args): ?string
    {
        // TODO: Implement help() method.

        return 'install help';
    }
}