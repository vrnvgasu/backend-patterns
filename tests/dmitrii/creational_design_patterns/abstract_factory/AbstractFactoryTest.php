<?php

namespace Tests\dmitrii\creational_design_patterns\abstract_factory;

use PHPUnit\Framework\TestCase;
use Src\dmitrii\creational_design_patterns\abstract_factory\factory\NotificationDanger;
use Src\dmitrii\creational_design_patterns\abstract_factory\factory\NotificationInterface;
use Src\dmitrii\creational_design_patterns\abstract_factory\factory\NotificationSuccess;
use Src\dmitrii\creational_design_patterns\abstract_factory\logger\BodyInterface;
use Src\dmitrii\creational_design_patterns\abstract_factory\logger\MetaInterface;

class AbstractFactoryTest extends TestCase
{
    public function addDataProvider()
    {
        return [
            [new NotificationDanger()],
            [new NotificationSuccess()],
        ];
    }

    /**
     * @dataProvider addDataProvider
     * @param $factory
     */
    public function testFactory(NotificationInterface $factory)
    {
        print_r($factory);
        $this->assertTrue(true);
        $this->assertInstanceOf(MetaInterface::class, $factory->createMeta());
        $this->assertInstanceOf(BodyInterface::class, $factory->createBody());
    }
}
