<?php

namespace Common\Messenger\Bot;

use Common\Logger\LoggerInterface;
use Common\Messenger\ApiInterface;
use Common\Messenger\Message\TextMessage;
use Exception;

/**
 * Class GameBot
 */
class GameBot implements BotInterface
{
    /**
     * @var LoggerInterface
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
     * GameBot constructor.
     *
     * @param LoggerInterface $logger
     * @param ApiInterface $api
     * @param string $page_id
     */
    public function __construct(
        LoggerInterface $logger,
        ApiInterface $api,
        string $page_id
    )
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
        }
    }
}
