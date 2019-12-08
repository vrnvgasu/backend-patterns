<?php


namespace Src\dmitrii\creational_design_patterns\abstract_factory\logger;


class BodySuccess implements BodyInterface
{
    /**
     * @param string $content
     * @return string
     */
    public function getBody(string $content): string
    {
        $output = "<body>";
        $output .= "<h1>Все получилось!</h1>";
        $output .= "<div>$content<div>";
        $output .= "</body>";

        return $output;
    }
}