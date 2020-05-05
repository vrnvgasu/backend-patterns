<?php

namespace Src\dmitrii\more\repository;

use Src\dmitrii\more\repository\Interfaces\EmailInterface;
use Src\dmitrii\more\repository\Interfaces\IdInterface;
use Src\dmitrii\more\repository\Interfaces\LoginInterface;
use Src\dmitrii\more\repository\Interfaces\Model;

class User implements Model
{
    protected IdInterface $id;
    protected LoginInterface $login;
    protected EmailInterface $email;

    public function __construct(IdInterface $id, LoginInterface $login, EmailInterface $email)
    {
        $this->id = $id;
        $this->login = $login;
        $this->email = $email;
    }

    public function getId(): IdInterface
    {
        return $this->id;
    }

    public function getLogin(): LoginInterface
    {
        return $this->login;
    }

    public function getEmail(): EmailInterface
    {
        return $this->email;
    }
}
