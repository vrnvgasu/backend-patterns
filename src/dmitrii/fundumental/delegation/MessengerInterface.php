<?php

namespace Src\dmitrii\fundumental\delegation;

interface MessengerInterface
{
    /**
     * @param string $sender
     * @return MessengerInterface
     */
    public function setSender(string $sender): self;

    /**
     * @param string $recipient
     * @return MessengerInterface
     */
    public function setRecipient(string $recipient): self;

    /**
     * @return string
     */
    public function send(): string;
}
