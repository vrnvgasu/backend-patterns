<?php


namespace Src\dmitrii\creational_design_patterns\abstract_factory\logger;


class MetaSuccess implements MetaInterface
{
    /**
     * @param $title
     * @return string
     */
    public function getMeta($title): string
    {
        $output = "<title>{$title}</title>";
        $output .= "<meta name='description' content='Все хорошо'>";
        $output .= "<meta http-equiv='Content-Type' content='молодец, успешно'></title>";

        return $output;
    }
}