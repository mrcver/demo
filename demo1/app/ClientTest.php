<?php

namespace App;

use RedisQueue\Client;
use RedisQueue\RedisInstance;
use App\Jobs\TestDemo;

$redis = RedisInstance::getInstance('redis', 6379, 10);
$client = new Client($redis);

$test = new TestDemo(1);
$client->dispatch($test);
echo "dispatch success";