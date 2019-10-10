<?php


namespace Src\dmitrii\creational_design_patterns\builder\elements_for_house;


abstract class HouseElement
{
    /**
     * @var int
     */
    protected $width;
    /**
     * @var int
     */
    protected $height;

    /**
     * @return int
     */
    public function getWidth()
    {
        return $this->width;
    }

    /**
     * @return int
     */
    public function getHeight()
    {
        return $this->height;
    }
}