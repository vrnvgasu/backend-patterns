<?php


namespace Src\dmitrii\creational_design_patterns\builder;


class GardenHouseBuilderHouse implements BuilderHouse
{
    /**
     * @var House
     */
    private $gardenHouse;

    /**
     * @return mixed|void
     */
    public function createHouse()
    {
        $this->gardenHouse = new GardenHouse();
    }

    /**
     * @return mixed|void
     * @throws \Exception
     */
    public function addWindow()
    {
        $this->checkHouse();
        $this->gardenHouse->setElement("kitchenWindow", new Window(180, 150));
    }

    /**
     * @return mixed|void
     * @throws \Exception
     */
    public function addDoor()
    {
        $this->checkHouse();
        $this->gardenHouse->setElement("MainDoor", new Door(100, 200));
    }

    /**
     * @return House
     * @throws \Exception
     */
    public function getHouse(): House
    {
        $this->checkHouse();
        return $this->gardenHouse;
    }

    /**
     * @return mixed|void
     * @throws \Exception
     */
    public function checkHouse()
    {
        if (!$this->gardenHouse) {
            throw new \Exception('Упс, веранды еще нет...');
        }
    }
}