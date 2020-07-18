<?php

namespace Tests\dmitrii\structural\facade;

use PHPUnit\Framework\TestCase;
use Src\dmitrii\structural\facade\ExcelReport;
use Src\dmitrii\structural\facade\PdfReport;
use Src\dmitrii\structural\facade\ReportFacade;
use Src\dmitrii\structural\facade\Sender;

/**
 * Class FacadeTest
 * @package Tests\dmitrii\structural\facade
 */
class FacadeTest extends TestCase
{
    public function testFacade(): void
    {
        $excel = $this->createMock(ExcelReport::class);
        $excel->method('createFile')
            ->will($this->returnValue('excel'));

        $pdf = $this->createMock(PdfReport::class);
        $pdf->method('createFile')
            ->will($this->returnValue('pdf'));

        $sender = $this->createMock(Sender::class);
        $sender->method('attach');
        $sender->method('send');

        $facade = new ReportFacade($sender, $excel, $pdf);

        $this->assertTrue($facade->report([]));
    }
}
