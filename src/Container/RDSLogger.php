<?php

namespace Mix\Framework\Container;

/**
 * Class RDSLogger
 * @package App\Container
 */
class RDSLogger implements \Mix\Redis\LoggerInterface
{
    public function trace(float $time, string $cmd, array $args, ?\Throwable $exception): void
    {
        logger()->debug(sprintf('RDS: %sms %s %s', $time, $cmd, json_encode($args)));
    }
}
