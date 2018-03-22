<?php

namespace Common\Messenger\Bot;

use Psr\Http\Message\ResponseInterface;

/**
 * Interface BotInterface
 */
interface BotInterface
{
    /**
     * @param array $data
     */
    public function handle(array $data): void;
}
