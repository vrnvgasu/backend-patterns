<?php


namespace Tests\dmitrii\creational_design_patterns\simple_factory;


use PHPUnit\Framework\TestCase;
use Src\dmitrii\creational_design_patterns\simple_factory\roles\Admin;
use Src\dmitrii\creational_design_patterns\simple_factory\roles\Guest;
use Src\dmitrii\creational_design_patterns\simple_factory\roles\Moderator;
use Src\dmitrii\creational_design_patterns\simple_factory\roles\User;
use Src\dmitrii\creational_design_patterns\simple_factory\SimpleFactory;

class SimpleFactoryTest extends TestCase
{
    public function testCreateUser()
    {
        $factory = new SimpleFactory();
        $this->assertInstanceOf(Admin::class, $factory->createUser('Admin'));
        $this->assertInstanceOf(Moderator::class, $factory->createUser('Moderator'));
        $this->assertInstanceOf(User::class, $factory->createUser('User'));
        $this->assertInstanceOf(Guest::class, $factory->createUser('Guest'));
    }
}