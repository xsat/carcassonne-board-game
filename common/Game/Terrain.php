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
     * Terrain constructor.
     *
     * @param ComponentInterface $middle
     * @param ComponentInterface $left
     * @param ComponentInterface $right
     * @param ComponentInterface $top
     * @param ComponentInterface $bottom
     */
    public function __construct(
        ComponentInterface $middle,
        ComponentInterface $left,
        ComponentInterface $right,
        ComponentInterface $top,
        ComponentInterface $bottom
    )
    {
        $this->middle = $middle;
        $this->left = $left;
        $this->right = $right;
        $this->top = $top;
        $this->bottom = $bottom;
    }

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
