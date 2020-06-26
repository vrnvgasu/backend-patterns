<?php

namespace Src\dmitrii\structural\decorator;

class Sender implements NotifierInterface
{
    /**
     * @param string $message
     * @return string
     */
    public function send(string $message): string
    {
        return 'send ' . $message . ' by email';
    }
}
