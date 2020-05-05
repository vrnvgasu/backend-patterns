<?php

namespace Src\dmitrii\more\repository;

use Src\dmitrii\more\repository\Interfaces\IdInterface;

class UserId implements IdInterface
{
    protected int $id;

    public function __construct(int $id)
    {
        $this->id = $id;
    }

    public function toInt(): int
    {
        return $this->id;
    }
}
