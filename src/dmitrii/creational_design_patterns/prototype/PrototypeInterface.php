<?php


namespace Src\dmitrii\creational_design_patterns\prototype;


interface PrototypeInterface
{
    /**
     * @return mixed
     */
    public function __clone();
}