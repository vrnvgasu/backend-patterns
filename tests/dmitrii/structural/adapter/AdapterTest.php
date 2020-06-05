<?php

namespace Tests\dmitrii\structural\adapter;

use DateTimeImmutable;
use PHPUnit\Framework\TestCase;
use Src\dmitrii\structural\adapter\MOEXAdapter;
use Src\dmitrii\structural\adapter\MOEXApi;
use Src\dmitrii\structural\adapter\StockQuote;

class AdapterTest extends TestCase
{
    public function testAdapter()
    {
        $moex = new MOEXApi();
        $moexAdapter = new MOEXAdapter($moex);

        $stock = new StockQuote('gaz');
        $date = new DateTimeImmutable();
        $this->assertEquals(json_encode([
            'stock' => 'gaz',
            'quote' => 50,
            'date' => $date->format('Y-m-d H:i:s'),
        ]), $stock->getQuote($moexAdapter, $date)->transformToJson());
    }
}
