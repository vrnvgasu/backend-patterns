<?php


namespace Src\dmitrii\creational_design_patterns\factory_method\parser;


class UrlParser implements Parser
{
    protected $plagins = [];

    public function addParcerPlagins($plaginName, $plagin)
    {
        $this->plagins[$plaginName] = $plagin;
    }

    public function parse($url)
    {
        foreach ($this->plagins as $plagin) {
            echo 'делаем что-то с данным url';
        }

        return true;
    }
}