<?php

namespace Src\dmitrii\fundumental\event_channel;

interface SubscriberInterface
{
    /**
     * @param string $data
     */
    public function notify(string $data): void;
}
