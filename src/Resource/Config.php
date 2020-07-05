<?php

namespace App;

return [
    'LISTEN_ADDRESS' => '0.0.0.0',
    'PORT' => 9502,
    'SOCK_TYPE' => SWOOLE_TCP,
    'RUN_MODEL' => SWOOLE_PROCESS,
    'SETTING' => [
        'worker_num' => 8,
        'reload_async' => true,
        'max_wait_time' => 3
    ]
];