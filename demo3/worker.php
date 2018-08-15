<?php
date_default_timezone_set('Asia/Shanghai');
error_reporting(E_ERROR);
require_once __DIR__ . '/vendor/autoload.php';
require_once __DIR__ . '/Jobs/TestDemo.php';

$jobDir = __DIR__ . '/Jobs';
$logDir = __DIR__ . '/logs';

$redis = RedisQueue\RedisInstance::getInstance('redis', 6379, 10);
//$redis = RedisQueue\RedisInstance::getInstance();


//后台多进程模式
//php worker.php start 2
$worker = new RedisQueue\DaemonWorker($redis, $logDir, 'default', $jobDir);
$worker->run();

//交互式单进程模式
//$worker = new RedisQueue\Worker($redis, $logDir, 'default', $jobDir);
//$worker->process();