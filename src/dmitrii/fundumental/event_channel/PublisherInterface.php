<?php

namespace Src\dmitrii\fundumental\event_channel;

interface PublisherInterface
{
    public function publish(string $data);
}
