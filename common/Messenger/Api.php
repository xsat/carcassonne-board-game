<?php

namespace Common\Messenger;

use Common\Messenger\Message\MessageInterface;
use Common\Messenger\Recipient\RecipientInterface;
use GuzzleHttp\Client;
use GuzzleHttp\Message\ResponseInterface;

/**
 * Class Api
 */
class Api implements ApiInterface
{
    /**
     * @var Client
     */
    private $client;

    /**
     * Api constructor.
     *
     * @param string $accessToken
     */
    public function __construct(string $accessToken)
    {
        $this->client = new Client([
            'base_uri' => 'https://graph.facebook.com/v2.6/',
            'query' => [
                'access_token' => $accessToken,
            ],
        ]);
    }

    /**
     * @param RecipientInterface $recipient
     * @param MessageInterface $message
     *
     * @return ResponseInterface
     */
    public function send(
        RecipientInterface $recipient,
        MessageInterface $message
    ): ResponseInterface
    {
        return $this->client->post('me/messages', [
//            'recipient' => $recipient->getRecipient(),
//            'message' => $message->getMessage(),
        ]);
    }
}
