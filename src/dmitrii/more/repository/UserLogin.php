<?php

namespace Src\dmitrii\more\repository;

use Src\dmitrii\more\repository\Interfaces\LoginInterface;

class UserLogin implements LoginInterface
{
    protected string $login;

    public function __construct(string $login)
    {
        $this->login = $login;
    }

    public function toSting(): string
    {
        return $this->login;
    }
}
