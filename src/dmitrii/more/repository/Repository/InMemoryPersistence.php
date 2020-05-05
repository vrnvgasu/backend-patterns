<?php

namespace Src\dmitrii\more\repository\Repository;

use Src\dmitrii\more\repository\Interfaces\IdInterface;
use Src\dmitrii\more\repository\Interfaces\Model;

class InMemoryPersistence implements Persistence
{
    protected static int $id = 0;
    protected static array $data = [];

    public function generateId(): int
    {
        return static::$id++;
    }

    public function retrieve(IdInterface $id): ?Model
    {
        // дополнительная догика ..

        return static::$data[$id->toInt()] ?? null;
    }

    public function save(Model $model): void
    {
        // дополнительная догика ..

        static::$data[$model->getId()->toInt()] = $model;
    }

    public function delete(IdInterface $id): void
    {
        // дополнительная догика ..

        unset(static::$data[$id->toInt()]);
    }
}
