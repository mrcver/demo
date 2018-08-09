<?php
require_once __DIR__ . '/vendor/autoload.php';
require_once __DIR__ . '/Jobs/TestDemo.php';
$redis = RedisQueue\RedisInstance::getInstance('redis', 6379, 10);
$client = new RedisQueue\Client($redis);

$test = new TestDemo(1);
$client->dispatch($test);
echo "dispatch success", PHP_EOL;