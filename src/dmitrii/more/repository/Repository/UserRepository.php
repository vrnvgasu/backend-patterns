<?php

namespace Src\dmitrii\more\repository\Repository;

use Src\dmitrii\more\repository\User;
use Src\dmitrii\more\repository\UserId;

class UserRepository
{
    protected Persistence $persistence;

    public function __construct($persistence)
    {
        $this->persistence = $persistence;
    }

    public function generateId(): UserId
    {
        return new UserId($this->persistence->generateId());
    }

    public function retrieve(UserId $id): ?User
    {
        return $this->persistence->retrieve($id);
    }

    public function save(User $user): void
    {
        $this->persistence->save($user);
    }

    public function delete(UserId $id): void
    {
        $this->persistence->delete($id);
    }
}
