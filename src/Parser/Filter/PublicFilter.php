<?php

/*
 * This file is part of the Doctum utility.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace Doctum\Parser\Filter;

use Doctum\Reflection\MethodReflection;
use Doctum\Reflection\PropertyReflection;

class PublicFilter extends TrueFilter
{
    public function acceptMethod(MethodReflection $method)
    {
        return $method->isPublic();
    }

    public function acceptProperty(PropertyReflection $property)
    {
        return $property->isPublic();
    }
}
