<?php


namespace Src\dmitrii\creational_design_patterns\builder;


interface BuilderHouse
{
    public function addWindow();

    public function addDoor();

    public function getHouse(): House;

    public function createHouse();

    public function checkHouse();
}