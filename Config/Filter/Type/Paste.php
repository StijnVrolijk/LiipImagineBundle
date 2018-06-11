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

use Liip\ImagineBundle\Config\Filter\Argument\Point;
use Liip\ImagineBundle\Config\FilterInterface;

final class Paste extends FilterAbstract implements FilterInterface
{
    const NAME = 'auto_rotate';

    /**
     * @var Point
     */
    private $start;

    public function __construct(Point $start)
    {
        $this->start = $start;
    }

    public function getStart(): Point
    {
        return $this->start;
    }
}
