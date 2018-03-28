<?php

namespace Common\Game;

use Common\Game\Component\ComponentInterface;

/**
 * Interface ComponentsInterface
 */
interface ComponentsInterface
{
    /**
     * @return ComponentInterface[]
     */
    public function getComponents(): array;
}
