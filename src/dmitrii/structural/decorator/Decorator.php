<?php

namespace Src\dmitrii\structural\decorator;

abstract class Decorator implements NotifierInterface
{
    /**
     * @var NotifierInterface
     */
    protected NotifierInterface $notifier;

    /**
     * Decorator constructor.
     * @param NotifierInterface $notifier
     */
    public function __construct(NotifierInterface $notifier)
    {
        $this->notifier = $notifier;
    }

    /**
     * @param string $message
     * @return string
     */
    public function send(string $message): string
    {
        return $this->notifier->send($message);
    }
}
