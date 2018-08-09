<?php

namespace App;

use RedisQueue\Server;
use RedisQueue\RedisInstance;

define('JOB_DIR', __DIR__ . '/Jobs');
$redis = RedisInstance::getInstance('redis', 6379, 10);
$server = new Server($redis, JOB_DIR);
$server->setBackup();
while (true) {
    $server->process();
}
