<?php

namespace Src\dmitrii\structural\facade;

/**
 * Class Sender
 * @package Src\dmitrii\structural\facade
 */
class Sender
{
    public function send(): void
    {
        echo 'send';
    }

    /**
     * @param string $path
     */
    public function attach(string $path): void
    {
        //
    }

    // code
}
