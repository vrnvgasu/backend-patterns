<?php

namespace Src\dmitrii\fundumental\delegation;

use Src\dmitrii\fundumental\delegation\messengers\MailMessenger;

class AppMessenger implements MessengerInterface
{
    protected $messenger;

    const types = [
        'email' => MailMessenger::class,
        'sms' => MailMessenger::class,
    ];

    /**
     * AppMessenger constructor.
     * @param string $type
     * @throws \Exception
     */
    public function __construct($type = 'email')
    {
        if (!isset(static::types[$type])) {
            throw new \Exception($type . ' method is not exist.');
        }

        $class = static::types[$type];
        $this->messenger = new $class();
    }

    /**
     * @param string $sender
     * @return MessengerInterface
     */
    public function setSender(string $sender): MessengerInterface
    {
        $this->messenger->setSender($sender);

        return $this;
    }

    /**
     * @param string $recipient
     * @return MessengerInterface
     */
    public function setRecipient(string $recipient): MessengerInterface
    {
        $this->messenger->setRecipient($recipient);

        return $this;
    }

    /**
     * @return string
     */
    public function send(): string
    {
        return $this->messenger->send();
    }
}
