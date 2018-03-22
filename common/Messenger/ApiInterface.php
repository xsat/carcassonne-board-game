<?php

namespace Common\Messenger;

use Common\Messenger\Message\MessageInterface;
use Psr\Http\Message\ResponseInterface;

/**
 * Interface ApiInterface
 */
interface ApiInterface
{
    /**
     * @param MessageInterface $message
     *
     * @return ResponseInterface
     */
    public function send(MessageInterface $message): ResponseInterface;
}
