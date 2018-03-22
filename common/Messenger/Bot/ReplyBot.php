<?php

namespace Common\Messenger\Bot;

use Common\Logger;
use Common\Messenger\ApiInterface;
use Common\Messenger\Message\TextMessage;
use Exception;

/**
 * Class ReplyBot
 */
class ReplyBot implements BotInterface
{
    /**
     * @var Logger
     */
    private $logger;

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
     * @param Logger $logger
     * @param ApiInterface $api
     * @param string $page_id
     */
    public function __construct(Logger $logger, ApiInterface $api, string $page_id)
    {
        $this->logger = $logger;
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
            isset($data['message']['text']) &&
            $data['recipient']['id'] === $this->page_id
        ) {
            try {
                $response = $this->api->send(
                    new TextMessage(
                        $data['sender']['id'],
                        'Re: ' . $data['message']['text']
                    )
                );
                $this->logger->add(
                    'debug.txt',
                    var_dump(new TextMessage(
                        $data['sender']['id'],
                        'Re: ' . $data['message']['text']
                    )) . PHP_EOL .
                    $response->getBody()->getContents() . PHP_EOL
                );
                $this->logger->add(
                    'response.txt',
                    date('Y-m-d H:i:s') . PHP_EOL .
                    $response->getBody()->getContents() . PHP_EOL
                );
            } catch (Exception $exception) {
                $this->logger->add(
                    'exception.txt',
                    date('Y-m-d H:i:s') . PHP_EOL .
                    $exception->getMessage() . PHP_EOL
                );
            }
        } else {
            $this->logger->add(
                'debug.txt',
                date('Y-m-d H:i:s') . PHP_EOL .
                json_encode($data) . PHP_EOL
            );
        }
    }
}
