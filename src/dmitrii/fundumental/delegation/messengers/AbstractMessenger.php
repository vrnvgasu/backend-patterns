<?php

namespace Src\dmitrii\fundumental\delegation\messengers;

use Src\dmitrii\fundumental\delegation\MessengerInterface;

class AbstractMessenger implements MessengerInterface
{
    /**
     * @string
     */
    protected $sender;
    /**
     * @string
     */
    protected $recipient;

    /**
     * @param string $sender
     * @return MessengerInterface
     */
    public function setSender(string $sender): MessengerInterface
    {
        $this->sender = $sender;
    }

    /**
     * @param string $recipient
     * @return MessengerInterface
     */
    public function setRecipient(string $recipient): MessengerInterface
    {
        $this->recipient = $recipient;
    }

    /**
     * @return MessengerInterface
     */
    public function send(): string
    {
        return static::class;
    }
}
