<?php

namespace Src\dmitrii\more\repository\Repository;

use Src\dmitrii\more\repository\Interfaces\IdInterface;
use Src\dmitrii\more\repository\Interfaces\Model;

interface Persistence
{
    public function generateId(): int;

    public function retrieve(IdInterface $id): ?Model;

    public function save(Model $model): void;

    public function delete(IdInterface $id): void;
}
