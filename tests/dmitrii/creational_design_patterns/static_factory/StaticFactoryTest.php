<?php


namespace Tests\dmitrii\creational_design_patterns\static_factory;


use PHPUnit\Framework\TestCase;
use Src\dmitrii\creational_design_patterns\static_factory\roles\Admin;
use Src\dmitrii\creational_design_patterns\static_factory\roles\Guest;
use Src\dmitrii\creational_design_patterns\static_factory\roles\Moderator;
use Src\dmitrii\creational_design_patterns\static_factory\roles\User;
use Src\dmitrii\creational_design_patterns\static_factory\StaticFactory;

class StaticFactoryTest extends TestCase
{
    public function testCreateUser()
    {
        $this->assertInstanceOf(Admin::class, StaticFactory::createUser('Admin'));
        $this->assertInstanceOf(Moderator::class, StaticFactory::createUser('Moderator'));
        $this->assertInstanceOf(User::class, StaticFactory::createUser('User'));
        $this->assertInstanceOf(Guest::class, StaticFactory::createUser('Guest'));
    }
}