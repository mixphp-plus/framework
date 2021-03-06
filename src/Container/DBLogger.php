<?php

namespace Mix\Framework\Container;

/**
 * Class DBLogger
 * @package App\Container
 */
class DBLogger implements \Mix\Database\LoggerInterface
{
    public function trace(float $time, string $sql, array $bindings, int $rowCount, ?\Throwable $exception): void
    {
        logger()->debug(sprintf('SQL: %sms %s %s %d', $time, $sql, json_encode($bindings), $rowCount));
    }
}
