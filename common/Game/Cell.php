<?php

namespace Common\Game;

/**
 * Class Cell
 */
class Cell
{
    /**
     * @var int
     */
    private $x;

    /**
     * @var int
     */
    private $y;

    /**
     * @var Component
     */
    private $left;

    /**
     * @var Component
     */
    private $right;

    /**
     * @var Component
     */
    private $top;

    /**
     * @var Component
     */
    private $bottom;
}
