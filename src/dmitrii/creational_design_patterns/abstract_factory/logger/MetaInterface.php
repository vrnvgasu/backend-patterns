<?php


namespace Src\dmitrii\creational_design_patterns\abstract_factory\logger;


interface MetaInterface
{
    /**
     * @param $title
     * @return string
     */
    public function getMeta($title): string;
}