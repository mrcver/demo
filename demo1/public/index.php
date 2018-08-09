#!/usr/bin/env php
<?php

require_once __DIR__ . '/../vendor/autoload.php';

$command = $argv[1];

if ($command) {
    switch ($command) {
        case 'client':
            require_once __DIR__ . '/../app/ClientTest.php';
            break;
        case 'server':
            require_once __DIR__ . '/../app/ServerTest.php';
            break;
        default:
            break;
    }
} else {
    echo '未找到相关命令';
}
echo PHP_EOL;