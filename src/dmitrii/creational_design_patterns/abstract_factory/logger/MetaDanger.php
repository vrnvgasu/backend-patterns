<?php


namespace Src\dmitrii\creational_design_patterns\abstract_factory\logger;


class MetaDanger implements MetaInterface
{
    /**
     * @param $title
     */
    public function getMeta($title): void
    {
        $output = "<title>{$title}</title>";
        $output .= "<meta name='description' content='Опасность'>";
        $output .= "<meta http-equiv='Content-Type' content='ахтунг, опасность, неудача'></title>";

        return $output;
    }
}