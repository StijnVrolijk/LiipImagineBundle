<?php

/*
 * This file is part of the `liip/LiipImagineBundle` project.
 *
 * (c) https://github.com/liip/LiipImagineBundle/graphs/contributors
 *
 * For the full copyright and license information, please view the LICENSE.md
 * file that was distributed with this source code.
 */

namespace Liip\ImagineBundle\Factory\Config;

use Liip\ImagineBundle\Config\FilterInterface;

interface FilterFactoryInterface
{
    /**
     * Filter name
     *
     * @return string
     */
    public function getName(): string;

    /**
     * @param array $options
     *
     * @return FilterInterface
     */
    public function create(array $options): FilterInterface;
}
