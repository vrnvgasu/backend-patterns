<?php

namespace Tests\dmitrii\fundumental\event_channel;

use PHPUnit\Framework\TestCase;
use Src\dmitrii\fundumental\event_channel\EventChannel;
use Src\dmitrii\fundumental\event_channel\Publisher;
use Src\dmitrii\fundumental\event_channel\Subscriber;

class EventChannelTest extends TestCase
{
    public function testEventChannel()
    {
        $eventChannel = new EventChannel();

        $subscriberFirst = new Subscriber();
        $subscriberSecond = new Subscriber();

        $publisherFirst = new Publisher('test1', $eventChannel);
        $publisherSecond = new Publisher('test2', $eventChannel);

        $eventChannel->subscribe('test1', $subscriberFirst);
        $eventChannel->subscribe('test1', $subscriberSecond);
        $eventChannel->subscribe('test2', $subscriberSecond);

        $publisherFirst->publish('hi, 1');
        $this->assertEquals(['hi, 1'], $subscriberFirst->getMessages());
        $this->assertEquals(['hi, 1'], $subscriberSecond->getMessages());

        $publisherSecond->publish('hi, 2');
        $this->assertEquals(['hi, 1'], $subscriberFirst->getMessages());
        $this->assertEquals(['hi, 1', 'hi, 2'], $subscriberSecond->getMessages());
    }
}
