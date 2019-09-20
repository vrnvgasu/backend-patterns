<?php


namespace Src\dmitrii\creational_design_patterns\builder;


class Door extends HouseElement
{
    /**
     * Door constructor.
     * @param int $width
     * @param int $height
     */
    public function __construct(int $width, int $height)
    {
        $this->width = $width;
        $this->height = $height;
    }
}