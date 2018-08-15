<?php
date_default_timezone_set('GMT');
require_once __DIR__ . '/vendor/autoload.php';
require_once __DIR__ . '/Jobs/TestDemo.php';
$redis = RedisQueue\RedisInstance::getInstance('redis', 6379, 10);
//$redis = RedisQueue\RedisInstance::getInstance();

$client = new RedisQueue\Client($redis);

$test = new TestDemo(1);
for ($i = 0; $i < 50; $i++) {
    $client->dispatch($test);
}
echo "dispatch success", PHP_EOL;