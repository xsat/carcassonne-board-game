<?php

namespace Common\Messenger\Bot;

use Common\Messenger\ApiInterface;
use Common\Messenger\Message\TextMessage;

/**
 * Class ReplyBot
 */
class ReplyBot implements BotInterface
{
    /**
     * @var ApiInterface
     */
    private $api;

    /**
     * @var string
     */
    private $page_id;

    /**
     * ReplyBot constructor.
     *
     * @param ApiInterface $api
     * @param string $page_id
     */
    public function __construct(ApiInterface $api, string $page_id)
    {
        $this->api = $api;
        $this->page_id = $page_id;
    }

    /**
     * @param array $data
     */
    public function handle(array $data): void
    {
        if (
            isset($data['sender']['id']) &&
            isset($data['recipient']['id']) &&
            isset($data['message']['test']) &&
            $data['recipient']['id'] === $this->page_id
        ) {
            $this->api->send(
                new TextMessage(
                    $data['sender']['id'],
                    'Re: ' . $data['message']['test']
                )
            );
        }
    }
}
