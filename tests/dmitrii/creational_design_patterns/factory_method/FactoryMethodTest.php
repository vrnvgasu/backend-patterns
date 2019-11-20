<?php


namespace Tests\dmitrii\creational_design_patterns\factory_method;


use PHPUnit\Framework\TestCase;
use Src\dmitrii\creational_design_patterns\factory_method\factory\ParseFactory;
use Src\dmitrii\creational_design_patterns\factory_method\factory\TextParserFactory;
use Src\dmitrii\creational_design_patterns\factory_method\factory\UrlParserFactory;
use Src\dmitrii\creational_design_patterns\factory_method\parser\TextParser;
use Src\dmitrii\creational_design_patterns\factory_method\parser\UrlParser;

class FactoryMethodTest extends TestCase
{
    public function testFactory()
    {
        $textParserFactory = new TextParserFactory();
        $this->assertInstanceOf(TextParser::class, $textParserFactory->createParser());
        $this->assertTrue($textParserFactory->initializeParser());

        $urlParserFactory = new UrlParserFactory();
        $this->assertInstanceOf(UrlParser::class, $urlParserFactory->createParser());
        $this->assertTrue($urlParserFactory->initializeParser());
    }
}