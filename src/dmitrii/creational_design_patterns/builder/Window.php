<?php


namespace Src\dmitrii\creational_design_patterns\builder;


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