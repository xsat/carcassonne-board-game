<?php

namespace App\Component;

/**
 * Interface ComponentInterface
 */
interface ComponentInterface
{
    /**
     * Levels
     */
    public const LEVEL_THIRD = 3;
    public const LEVEL_SECOND = 2;
    public const LEVEL_FIRST = 1;
    /**
     * Positions
     */
    public const POSITION_MIDDLE = 0;
    public const POSITION_LEFT = 1;
    public const POSITION_RIGHT = 2;
    public const POSITION_TOP = 3;
    public const POSITION_BOTTOM = 4;

    /**
     * @return int
     */
    public function getLevel(): int;

    /**
     * @return int
     */
    public function getPosition(): int;
}
