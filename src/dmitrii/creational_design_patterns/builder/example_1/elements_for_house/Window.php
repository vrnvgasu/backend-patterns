<?php

namespace Src\dmitrii\creational_design_patterns\builder\example_1\elements_for_house;

class Window extends HouseElement
{
    /**
     * Window constructor.
     * @param int $width
     * @param int $height
     */
    public function __construct(int $width, int $height)
    {
        $this->width = $width;
        $this->height = $height;
    }
}
