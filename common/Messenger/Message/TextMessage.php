<?php

namespace Common\Messenger\Message;

/**
 * Class TextMessage
 */
class TextMessage implements MessageInterface
{
    /**
     * @var string
     */
    private $recipient_id;

    /**
     * @var string
     */
    private $message_text;

    /**
     * TextMessage constructor.
     *
     * @param string $recipient_id
     * @param string $message_text
     */
    public function __construct(string $recipient_id, string $message_text)
    {
        $this->recipient_id = $recipient_id;
        $this->message_text = $message_text;
    }

    /**
     * @return array
     */
    public function getData(): array
    {
        return [
            'recipient' => [
                'id' => $this->recipient_id,
            ],
            'message' => [
                'text' => $this->message_text,
            ]
        ];
    }
}
