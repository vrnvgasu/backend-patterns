<?php


namespace Src\dmitrii\creational_design_patterns\factory_method\factory;


interface ParseFactory
{
    public function createParser();

    public function initializeParser();
}