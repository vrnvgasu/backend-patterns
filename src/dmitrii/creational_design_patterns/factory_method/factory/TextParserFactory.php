<?php


namespace Src\dmitrii\creational_design_patterns\factory_method\factory;



use Src\dmitrii\creational_design_patterns\factory_method\parser\TextParser;

class TextParserFactory implements ParseFactory
{
    public function createParser($params = [])
    {
        $textParser = new TextParser();

        echo 'Логика обработки $params';
        $type = '...';

        $textParser->setType($type);

        return $textParser;
    }

    public function initializeParser($file = '')
    {
        $params['file'] = $file;
        $textParser = $this->createParser($params);
        return $textParser->parse($file);
    }
}