<?php


namespace Darifo\Gateway;

use Darifo\Gateway\Component\Singleton;


class Core
{
    use Singleton;

    public function run(array $args) {
        var_dump($args);
    }
}