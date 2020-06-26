<?php

namespace Src\dmitrii\structural\decorator;

interface NotifierInterface
{
    /**
     * @param string $message
     * @return string
     */
    public function send(string $message): string;
}
