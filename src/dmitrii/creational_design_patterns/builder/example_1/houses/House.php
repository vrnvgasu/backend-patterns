<?php

namespace Src\dmitrii\creational_design_patterns\builder\example_1\houses;

use Src\dmitrii\creational_design_patterns\builder\example_1\elements_for_house\HouseElement;

abstract class House
{
    /**
     * @var array
     */
    private $data = [];

    /** Добавить элемент в строение
     * @param string $name
     * @param HouseElement $element
     */
    public function setElement(string $name, HouseElement $element)
    {
        $this->data[$name] = $element;
    }

}