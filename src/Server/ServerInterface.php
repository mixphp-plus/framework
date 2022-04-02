<?php

namespace Mix\Framework\Server;

interface ServerInterface
{
    public const SWOOLE_SERVER = 1;

    public const SWOOLE_COUTINE_SERVER = 2;

    public const CLI_SERVER = 3;

    public const WORKERMAN_SERVER = 4;

    public function run();
}