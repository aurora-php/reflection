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

use ReflectionNamedType;
use ReflectionType;
use ReflectionUnionType;

final class ReflectionUtils
{
    /**
     * @param ReflectionType $type
     *
     * @return ReflectionNamedType[]
     */
    public static function getTypes(ReflectionType $type): array
    {
        if ($type instanceof ReflectionNamedType) {
            return [$type];
        }
        if ($type instanceof ReflectionUnionType) {
            return $type->getTypes();
        }

        return [];
    }
}
