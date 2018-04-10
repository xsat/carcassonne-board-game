<?php

namespace Common\Game\Component;

/**
 * Interface ComponentInterface
 */
interface ComponentInterface
{
    /**
     * @param ComponentInterface $component
     *
     * @return bool
     */
    public function connect(ComponentInterface $component): bool;
}
