<?php


namespace Tests\dmitrii\creational_design_patterns\builder;

use PHPUnit\Framework\TestCase;
use Src\dmitrii\creational_design_patterns\builder\example_1\builders\BathhouseBuilderHouse;
use Src\dmitrii\creational_design_patterns\builder\example_1\builders\GardenHouseBuilderHouse;
use Src\dmitrii\creational_design_patterns\builder\example_1\Director;
use Src\dmitrii\creational_design_patterns\builder\example_1\houses\Bathhouse;
use Src\dmitrii\creational_design_patterns\builder\example_1\houses\GardenHouse;

class BuilderTest extends TestCase
{
    public $director;

    protected function setUp()
    {
        parent::setUp();
        $this->director = new Director();
    }

    /**
     * Создаем билдер для баньки. Директор строет по нему баньку
     */
    public function testBuildBathhouse()
    {
        $bathhouseBuilder = new BathhouseBuilderHouse();
        $bathhouse = $this->director->build($bathhouseBuilder);
        $this->assertInstanceOf(Bathhouse::class ,$bathhouse);
    }

    /**
     * Создаем билдер для беседки. Директор строет по нему беседку
     */
    public function testBuildGardenHouse()
    {
        $gardenHouseBuilder = new GardenHouseBuilderHouse();
        $bathhouse = $this->director->build($gardenHouseBuilder);
        $this->assertInstanceOf(GardenHouse::class ,$bathhouse);
    }
}
