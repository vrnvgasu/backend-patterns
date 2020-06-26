<?php

namespace Src\dmitrii\structural\decorator;

class SMSNotifier extends Decorator
{
    /**
     * @param string $message
     * @return string
     */
    public function send(string $message): string
    {
        return parent::send($message) . ' and by sms';
    }
}
