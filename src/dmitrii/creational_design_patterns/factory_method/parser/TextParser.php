<?php


namespace Src\dmitrii\creational_design_patterns\factory_method\parser;


class TextParser implements Parser
{
    protected $type = 'txt';

    public function setType($textType)
    {
        $this->type = $textType;
    }

    public function parse($file)
    {
        switch ($this->type) {
            default:
                echo 'обрабатываем так-то наш файл';
        }

        return true;
    }
}