<?php

declare(strict_types=1);
/**
 * This file is part of hyperf-ext/hashing.
 *
 * @link     https://github.com/hyperf-ext/hashing
 * @contact  eric@zhu.email
 * @license  https://github.com/hyperf-ext/hashing/blob/master/LICENSE
 */
namespace Tokio\Hyperf3Hashing\Contract;

interface HashInterface extends DriverInterface
{
    /**
     * Get a driver instance.
     *
     * @return \Tokio\Hyperf3Hashing\Contract\DriverInterface
     */
    public function getDriver(?string $name = null): DriverInterface;
}
