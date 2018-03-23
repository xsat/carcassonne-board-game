<?php

namespace Common\Game;

use Common\Game\Component\ComponentInterface;

/**
 * Class Terrain
 */
class Terrain
{
    /**
     * @var ComponentInterface
     */
    private $middle;

    /**
     * @var ComponentInterface
     */
    private $left;

    /**
     * @var ComponentInterface
     */
    private $right;

    /**
     * @var ComponentInterface
     */
    private $top;

    /**
     * @var ComponentInterface
     */
    private $bottom;

    /**
     * @return ComponentInterface
     */
    public function getMiddle(): ComponentInterface
    {
        return $this->middle;
    }

    /**
     * @return ComponentInterface
     */
    public function getLeft(): ComponentInterface
    {
        return $this->left;
    }

    /**
     * @return ComponentInterface
     */
    public function getRight(): ComponentInterface
    {
        return $this->right;
    }

    /**
     * @return ComponentInterface
     */
    public function getTop(): ComponentInterface
    {
        return $this->top;
    }

    /**
     * @return ComponentInterface
     */
    public function getBottom(): ComponentInterface
    {
        return $this->bottom;
    }
}
