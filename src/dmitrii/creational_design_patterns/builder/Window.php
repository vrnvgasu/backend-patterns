<?php


namespace Src\dmitrii\creational_design_patterns\builder;


class Window
{
    private $width;
    private $height;

    public function __construct(int $width, int $height)
    {
        $this->width = $width;
        $this->height = $height;
    }

    public function getWidth()
    {
        return $this->width;
    }

    public function getHeight()
    {
        return $this->height;
    }
}