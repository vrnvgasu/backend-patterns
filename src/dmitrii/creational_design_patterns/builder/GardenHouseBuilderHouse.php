<?php


namespace Src\dmitrii\creational_design_patterns\builder;


class GardenHouseBuilderHouse implements BuilderHouse
{
    private $gardenHouse;

    public function createHouse()
    {
        $this->gardenHouse = new GardenHouse();
    }

    public function addWindow()
    {
        $this->checkHouse();
        $this->gardenHouse->setElement("kitchenWindow", new Window(180, 150));
    }

    public function addDoor()
    {
        $this->checkHouse();
        $this->gardenHouse->seElement("MainDoor", new Door(100, 200));
    }

    public function getHouse(): House
    {
        $this->checkHouse();
        return $this->gardenHouse;
    }

    public function checkHouse()
    {
        throw new \Exception('Упс, веранды еще нет...');
    }
}