<?php

namespace App;

use App\Component\ComponentInterface;

/**
 * Class Terrain
 */
class Terrain
{
    /**
     * @var ComponentInterface[]
     */
    private $components = [];

    /**
     * @return ComponentInterface[]
     */
    public function getComponents(): array
    {
        return $this->components;
    }

    /**
     * @param ComponentInterface $component
     */
    public function addComponent(ComponentInterface $component): void
    {
        $this->components[] = $component;
    }
}
