<?php

namespace Src\dmitrii\structural\decorator;

class SlackNotifier extends Decorator
{
    /**
     * @param string $message
     * @return string
     */
    public function send(string $message): string
    {
        return parent::send($message) . ' and by slack';
    }
}
