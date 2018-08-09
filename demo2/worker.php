<?php
require_once __DIR__ . '/vendor/autoload.php';
define('JOB_DIR', __DIR__ . '/Jobs');

$redis = RedisQueue\RedisInstance::getInstance('redis', 6379, 10);
$server = new RedisQueue\Server($redis, JOB_DIR);
$server->setBackup();
while (true) {
    $server->process();
}
