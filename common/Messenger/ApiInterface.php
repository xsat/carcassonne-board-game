<?php

namespace Common\Messenger;

use Common\Messenger\Message\MessageInterface;
use Common\Messenger\Recipient\RecipientInterface;
use GuzzleHttp\Message\ResponseInterface;

/**
 * Interface ApiInterface
 */
interface ApiInterface
{
    /**
     * @param RecipientInterface $recipient
     * @param MessageInterface $message
     *
     * @return ResponseInterface
     */
    public function send(
        RecipientInterface $recipient,
        MessageInterface $message
    ): ResponseInterface;
}