<?php

namespace Tests\dmitrii\fundumental\delegation;

use PHPUnit\Framework\TestCase;
use Src\dmitrii\fundumental\delegation\AppMessenger;
use Src\dmitrii\fundumental\delegation\messengers\MailMessenger;
use Src\dmitrii\fundumental\delegation\messengers\SmsMessenger;

class DeligationTest extends TestCase
{
     public function testDeligate()
     {
         $this->expectExceptionMessage('skype method is not exist.');
         $messenger = new AppMessenger('skype');

         $messenger = new AppMessenger();
         $this->assertEquals(MailMessenger::class, $messenger->send());

         $messenger = new AppMessenger('sms');
         $this->assertEquals(SmsMessenger::class, $messenger->send());
     }
}
