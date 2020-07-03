<?php

namespace Src\dmitrii\structural\data_mapper;

interface StorageInterface
{
    /**
     * @param int $id
     * @return array
     */
    public function find(int $id): ?array;
}
