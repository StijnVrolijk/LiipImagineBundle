<?php

/*
 * This file is part of the `liip/LiipImagineBundle` project.
 *
 * (c) https://github.com/liip/LiipImagineBundle/graphs/contributors
 *
 * For the full copyright and license information, please view the LICENSE.md
 * file that was distributed with this source code.
 */

namespace Liip\ImagineBundle\Config\Filter\Type;

use Liip\ImagineBundle\Config\Filter\Argument\Size;
use Liip\ImagineBundle\Config\FilterInterface;

final class Scale extends FilterAbstract implements FilterInterface
{
    const NAME = 'scale';

    /**
     * @var Size
     */
    private $dimensions;

    /**
     * @var float
     */
    private $to;

    /**
     * @param Size       $dimensions
     * @param float|null $to         proportional scale operation computed by multiplying all image sides by this value
     */
    public function __construct(Size $dimensions, float $to = null)
    {
        $this->dimensions = $dimensions;
        $this->to = $to;
    }

    public function getDimensions(): Size
    {
        return $this->dimensions;
    }

    public function getTo(): ?float
    {
        return $this->to;
    }
}
