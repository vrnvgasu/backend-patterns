<?php

namespace Src\dmitrii\structural\data_mapper;

class UserMapper
{
    /**
     * @var StorageInterface
     */
    protected StorageInterface $storage;

    /**
     * UserMapper constructor.
     * @param StorageInterface $storage
     */
    public function __construct(StorageInterface $storage)
    {
        $this->storage = $storage;
    }

    /**
     * @param int $userId
     * @return UserModel|null
     */
    public function find(int $userId): ?UserModel
    {
        $data = $this->storage->find($userId);

        if (is_null($data)) {
            return null;
        }

        return $this->mapUser($data);
    }

    /**
     * @param array $data
     * @return UserModel
     */
    protected function mapUser(array $data): UserModel
    {
        return new UserModel($data['id'], $data['login']);
    }
}
