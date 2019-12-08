<?php


namespace Src\dmitrii\creational_design_patterns\abstract_factory\logger;


interface BodyInterface
{
    /**
     * @param string $content
     * @return string
     */
    public function getBody(string $content): string;
}