<?php

namespace Src\dmitrii\more\repository;

use Src\dmitrii\more\repository\Interfaces\EmailInterface;

class UserEmail implements EmailInterface
{
    protected string $email;

    public function __construct(string $email)
    {
        if (!$this->validate($email)) {
            throw new \Exception($email . ' is not valid email.');
        }

        $this->email = $email;
    }

    public function toSting(): string
    {
        return $this->email;
    }

    public function validate(): bool
    {
        echo '[x] validate ...';

        return true;
    }
}
