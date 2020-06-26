<?php

namespace Tests\dmitrii\structural\decorator;

use PHPUnit\Framework\TestCase;
use Src\dmitrii\structural\decorator\Sender;
use Src\dmitrii\structural\decorator\SlackNotifier;
use Src\dmitrii\structural\decorator\SMSNotifier;

class DecoratorTest extends TestCase
{
    public function testDecorator(): void
    {
        $message = 'text';
        $sender = new Sender();

        $this->assertEquals(
            'send ' . $message . ' by email',
            $sender->send($message)
        );

        $slack = new SlackNotifier($sender);
        $this->assertEquals(
            'send ' . $message . ' by email and by slack',
            $slack->send($message)
        );

        $sms = new SMSNotifier($slack);
        $this->assertEquals(
            'send ' . $message . ' by email and by slack and by sms',
            $sms->send($message)
        );
    }
}
