<?php

namespace Src\dmitrii\structural\data_mapper;

class Storage implements StorageInterface
{
    /**
     * @var array
     */
    protected array $data;

    /**
     * Storage constructor.
     * @param array $data
     */
    public function __construct(array $data = [])
    {
        $this->data = $data;
    }

    /**
     * @param int $id
     * @return array|null
     */
    public function find(int $id): ?array
    {
        if (isset($this->data[$id])) {
            return $this->data[$id];
        }

        return null;
    }
}
