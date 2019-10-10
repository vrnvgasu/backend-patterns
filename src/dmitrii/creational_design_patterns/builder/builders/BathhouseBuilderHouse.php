<?php


namespace Src\dmitrii\creational_design_patterns\builder\builders;


use Src\dmitrii\creational_design_patterns\builder\elements_for_house\Door;
use Src\dmitrii\creational_design_patterns\builder\elements_for_house\Window;
use Src\dmitrii\creational_design_patterns\builder\houses\Bathhouse;
use Src\dmitrii\creational_design_patterns\builder\houses\House;

class BathhouseBuilderHouse implements BuilderHouse
{
    /**
     * @var HOUSE
     */
    private $bathhouse;

    /**
     * @return mixed|void
     * @throws \Exception
     */
    public function addWindow()
    {
        $this->checkHouse();
        $this->bathhouse->setElement('bath window', new Window(10, 10));
    }

    /**
     * @return mixed|void
     * @throws \Exception
     */
    public function addDoor()
    {
        $this->checkHouse();
        $this->bathhouse->setElement('main door', new Door(80, 200));
    }

    /**
     * @return House
     * @throws \Exception
     */
    public function getHouse(): House
    {
        $this->checkHouse();
        return $this->bathhouse;
    }

    /**
     * @return mixed|void
     */
    public function createHouse()
    {
        $this->bathhouse = new Bathhouse();
    }

    /**
     * @return mixed|void
     * @throws \Exception
     */
    public function checkHouse()
    {
        if(!$this->bathhouse) {
            throw new \Exception('Упс, баньки еще нет...');
        }
    }
}