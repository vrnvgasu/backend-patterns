<?php


namespace Src\dmitrii\creational_design_patterns\builder;


abstract class House
{
    private $data = [];

    /**
     * @param $elementName
     * @param $element
     */
    public function setElement(string $name, $element)
    {
        $this->data[$name] = $element;
    }
}