<?php

declare(strict_types=1);

/*
 * This file is part of the Aurora Project.
 *
 * (c) Tentifly <info@tentifly.com>
 *
 * This file is subject to the MIT license.
 * For the full copyright and license information, please view
 * the LICENSE file that was distributed with this source code.
 */

namespace Aurora\Reflection;

use ReflectionParameter;

final class ReflectionClass extends \ReflectionClass
{
    /**
     * @param string $class
     *
     * @return bool
     */
    public function isInstanceOf(string $class): bool
    {
        return is_a($this->name, $class, true);
    }

    /**
     * @return ReflectionParameter[]
     */
    public function getInstanceArgs(): array
    {
        $constructor = $this->getConstructor();

        return null === $constructor ? [] : $constructor->getParameters();
    }
}
