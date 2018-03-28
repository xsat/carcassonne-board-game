<?php

namespace Common\Game;

use Common\Game\Component\ComponentInterface;

/**
 * Class Connection
 */
class Connection implements ConnectionInterface, ComponentsInterface
{
    /**
     * @var ComponentInterface[]
     */
    private $components = [];

    /**
     * @param ComponentsInterface $components
     */
    public function merge(ComponentsInterface $components): void
    {
        foreach ($components->getComponents() as $component) {
            $this->connect($component);
        }
    }

    /**
     * @param ComponentInterface $component
     */
    public function connect(ComponentInterface $component): void
    {
        $this->components[] = $component;
    }

    /**
     * @return ComponentInterface[]
     */
    public function getComponents(): array
    {
        return $this->components;
    }
}
