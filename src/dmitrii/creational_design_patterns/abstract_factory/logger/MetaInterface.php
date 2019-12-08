<?php


namespace Src\dmitrii\creational_design_patterns\abstract_factory\logger;


interface MetaInterface
{
    /**
     * @param $title
     */
    public function getMeta($title): void;
}