<?php

namespace Src\dmitrii\structural\data_mapper;

class UserModel
{
    /**
     * @var int
     */
    protected int $id;
    /**
     * @var string
     */
    protected string $login;

    /**
     * UserModel constructor.
     * @param int $id
     * @param string $login
     */
    public function __construct(int $id, string $login)
    {
        $this->id = $id;
        $this->login = $login;
    }

    /**
     * @return string
     */
    public function getLogin(): string
    {
        return $this->login;
    }
}
