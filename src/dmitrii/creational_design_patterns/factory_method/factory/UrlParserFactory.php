<?php


namespace Src\dmitrii\creational_design_patterns\factory_method\factory;


use Src\dmitrii\creational_design_patterns\factory_method\parser\UrlParser;

class UrlParserFactory implements ParseFactory
{
    public function createParser($plagins = [])
    {
        $urlParser = new UrlParser();

        echo 'Логика обработки $plagins';

        foreach ($plagins as $k => $v) {
            $urlParser->addParcerPlagins($k, $v);
        }

        return $urlParser;
    }

    public function initializeParser($url = '', $plagins = [])
    {
        $urlParser = $this->createParser($plagins);
        return $urlParser->parse($url);
    }
}