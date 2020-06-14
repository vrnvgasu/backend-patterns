<?php

namespace Tests\dmitrii\structural\bridge;

use PHPUnit\Framework\TestCase;
use Src\dmitrii\structural\bridge\ExcelImplementation;
use Src\dmitrii\structural\bridge\ReportAbstraction;
use Src\dmitrii\structural\bridge\TxtImplementation;

class BridgeTest extends TestCase
{
    public function testBridge(): void
    {
        $report = new ReportAbstraction(new ExcelImplementation());

        $report->setTitle('excel');
        $this->assertEquals('save report to excel with title: excel', $report->save());

        $report->changeImplementation(new TxtImplementation());
        $report->setTitle('txt');
        $this->assertEquals('save report to txt with title: txt', $report->save());
    }
}
