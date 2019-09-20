<?php


namespace Src\dmitrii\creational_design_patterns\builder;


class BathhouseBuilderHouse implements BuilderHouse
{
    private $bathhouse;

    public function addWindow()
    {
        $this->checkHouse();
        $this->bathhouse->setElement('bath window', new Window(10, 10));
    }

    public function addDoor()
    {
        $this->checkHouse();
        $this->bathhouse->setElement('main door', new Door(80, 200));
    }

    public function getHouse(): House
    {
        $this->checkHouse();
        $this->bathhouse;
    }

    public function createHouse()
    {
        $this->bathhouse = new Bathhouse();
    }

    public function checkHouse()
    {
        throw new \Exception('Упс, баньки еще нет...');
    }
}