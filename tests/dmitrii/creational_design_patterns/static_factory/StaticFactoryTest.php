<?php


namespace Tests\dmitrii\creational_design_patterns\static_factory;


use PHPUnit\Framework\TestCase;
use Src\dmitrii\creational_design_patterns\static_factory\roles\Admin;
use Src\dmitrii\creational_design_patterns\static_factory\roles\Guest;
use Src\dmitrii\creational_design_patterns\static_factory\roles\Moderator;
use Src\dmitrii\creational_design_patterns\static_factory\roles\User;
use Src\dmitrii\creational_design_patterns\static_factory\SimpleFactory;

class StaticFactoryTest extends TestCase
{
    public function testCreateUser()
    {
        $this->assertInstanceOf(Admin::class, SimpleFactory::createUser('Admin'));
        $this->assertInstanceOf(Moderator::class, SimpleFactory::createUser('Moderator'));
        $this->assertInstanceOf(User::class, SimpleFactory::createUser('User'));
        $this->assertInstanceOf(Guest::class, SimpleFactory::createUser('Guest'));
    }
}