<?php

namespace Common\Messenger;

use Common\Messenger\Message\MessageInterface;
use GuzzleHttp\Client;
use Psr\Http\Message\ResponseInterface;

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
            'base_uri' => 'https://graph.facebook.com/v2.6',
            'query' => [
                'access_token' => $accessToken,
            ],
        ]);
    }

    /**
     * @param MessageInterface $message
     *
     * @return ResponseInterface
     */
    public function send(MessageInterface $message): ResponseInterface
    {
        return $this->client->post('me/messages', [
            'json' => $message->getData(),
        ]);
    }
}
