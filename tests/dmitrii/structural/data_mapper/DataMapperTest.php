<?php

namespace Tests\dmitrii\structural\data_mapper;

use PHPUnit\Framework\TestCase;
use Src\dmitrii\structural\data_mapper\Storage;
use Src\dmitrii\structural\data_mapper\UserMapper;
use Src\dmitrii\structural\data_mapper\UserModel;

class DataMapperTest extends TestCase
{
    public function testDataMapper(): void
    {
        $storage = new Storage([
            1 => [
                'id' => 1,
                'login' => 'testovich',
            ],
        ]);
        $dataMapper = new UserMapper($storage);

        $this->assertNull($dataMapper->find(2));
        $this->assertInstanceOf(UserModel::class, $dataMapper->find(1));
    }
}
