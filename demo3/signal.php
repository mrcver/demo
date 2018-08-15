<?php
$pids = file('run.pid');

foreach ($pids as $pid){
    posix_kill($pid, SIGHUP);
}