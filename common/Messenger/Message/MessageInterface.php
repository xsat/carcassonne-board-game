<?php

namespace Common\Messenger\Message;

/**
 * Interface MessageInterface
 */
interface MessageInterface
{
    /**
     * @return array
     */
    public function getData(): array;
}
