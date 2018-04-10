<?php

namespace Common\Game\Component;

/**
 * Class Component
 */
abstract class Component implements ComponentInterface
{
    /**
     * @var ComponentInterface[]
     */
    private $components = [];

    /**
     * @param ComponentInterface $component
     *
     * @return bool
     */
    public function connect(ComponentInterface $component): bool
    {
        $this->components[] = $component;
    }
}
