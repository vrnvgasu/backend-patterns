<?php


namespace Tests\dmitrii\creational_design_patterns\singleton;


use PHPUnit\Framework\TestCase;
use Src\dmitrii\creational_design_patterns\singleton\Config;
use Src\dmitrii\creational_design_patterns\singleton\SingletonInterface;

class SingletonTest extends TestCase
{
    public function testSingleton()
    {
        $config = Config::getInstance();
        $this->assertInstanceOf(SingletonInterface::class, $config);

        $config->setValue('key', 'value');

        $newConfig = Config::getInstance();
        $this->assertSame($config, $newConfig);
        $this->assertSame('value', $newConfig->getValue('key'));
    }
}