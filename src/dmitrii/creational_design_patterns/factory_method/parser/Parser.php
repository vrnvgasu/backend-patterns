<?php


namespace Src\dmitrii\creational_design_patterns\factory_method\parser;

/**
 * Разбираем какой-то ресурс
 * Interface Parser
 * @package Src\dmitrii\creational_design_patterns\factory_method\parser
 */
interface Parser
{
    public function parse($resource);
}