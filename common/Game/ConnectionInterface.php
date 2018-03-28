<?php

namespace Common\Game;

use Common\Game\Component\ComponentInterface;

/**
 * Interface ConnectionInterface
 */
interface ConnectionInterface
{
    /**
     * @param ComponentsInterface $components
     */
    public function merge(ComponentsInterface $components): void;

    /**
     * @param ComponentInterface $component
     */
    public function connect(ComponentInterface $component): void;
}
