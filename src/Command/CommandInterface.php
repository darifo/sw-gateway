<?php


namespace Darifo\Gateway\Command;


interface CommandInterface
{
    public function commandName():string;
    public function exec(array $args):?string ;
    public function help(array $args):?string ;
}