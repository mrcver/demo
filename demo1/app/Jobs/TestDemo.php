<?php

namespace App\Jobs;

use RedisQueue\JobInterface;

class TestDemo implements JobInterface
{
    private $id = null;

    function __construct($id)
    {
        $this->id = $id;
    }

    function handle()
    {
        echo 'hello';
        echo $this->id, PHP_EOL;
        sleep(2);
        echo $this->id++, PHP_EOL;
        sleep(2);
        echo $this->id++, PHP_EOL;
        sleep(2);
        echo $this->id++, PHP_EOL;
        sleep(2);
        echo $this->id++, PHP_EOL;
        sleep(2);
        echo $this->id++, PHP_EOL;
        sleep(2);
        echo $this->id++, PHP_EOL;
        sleep(2);
        echo $this->id++, PHP_EOL;
        sleep(2);
        echo $this->id++, PHP_EOL;
    }
}