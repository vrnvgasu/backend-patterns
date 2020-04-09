<?php


namespace Src\dmitrii\creational_design_patterns\abstract_factory\logger;


class MetaDanger implements MetaInterface
{
    /**
     * @param $title
     * @return string
     */
    public function getMeta($title): string
    {
        $output = "<title>{$title}</title>";
        $output .= "<meta name='description' content='Опасность'>";
        $output .= "<meta http-equiv='Content-Type' content='ахтунг, опасность, неудача'></title>";

        return $output;
    }
}