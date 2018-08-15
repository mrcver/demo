<?php

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
        sleep(3);
    }
}