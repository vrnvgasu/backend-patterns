<?php

namespace Tests\dmitrii\more\repository;

use PHPUnit\Framework\TestCase;
use Src\dmitrii\more\repository\Interfaces\IdInterface;
use Src\dmitrii\more\repository\Interfaces\Model;
use Src\dmitrii\more\repository\Repository\InMemoryPersistence;
use Src\dmitrii\more\repository\Repository\UserRepository;
use Src\dmitrii\more\repository\User;
use Src\dmitrii\more\repository\UserEmail;
use Src\dmitrii\more\repository\UserLogin;

class RepositoryTest extends TestCase
{
    protected UserRepository $userRepository;

    protected function setUp()
    {
        $this->userRepository = new UserRepository(new InMemoryPersistence());
    }

    public function testRepository()
    {
        $id = $this->userRepository->generateId();
        $this->assertInstanceOf(IdInterface::class, $id);

        $login = new UserLogin('test');
        $email = new UserEmail('test@test.test');

        $user = new User($id, $login, $email);
        $this->assertEquals($id, $user->getId());

        $this->userRepository->save($user);

        $this->assertInstanceOf(Model::class, $this->userRepository->retrieve($user->getId()));

        $this->userRepository->delete($user->getId());
        $this->assertNull($this->userRepository->retrieve($user->getId()));
    }
}
