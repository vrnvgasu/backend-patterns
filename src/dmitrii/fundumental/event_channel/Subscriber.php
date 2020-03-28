<?php

namespace Src\dmitrii\fundumental\event_channel;

class Subscriber implements SubscriberInterface
{
    /**
     * @var array
     */
    protected $messages = [];

    /**
     * @param string $data
     */
    protected function setMessage(string $data)
    {
        $this->messages[] = $data;
    }

    /**
     * @return array
     */
    public function getMessages(): array
    {
        return $this->messages;
    }

    /**
     * @param string $data
     */
    public function notify(string $data): void
    {
        $this->setMessage($data);
    }
}
