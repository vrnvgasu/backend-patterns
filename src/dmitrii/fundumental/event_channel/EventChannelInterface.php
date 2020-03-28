<?php

namespace Src\dmitrii\fundumental\event_channel;

interface EventChannelInterface
{
    public function subscribe(string $topic, SubscriberInterface $subscriber);

    public function publish(string $data, string $topic);
}
