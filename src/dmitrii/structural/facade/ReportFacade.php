<?php

namespace Src\dmitrii\structural\facade;

use phpDocumentor\Reflection\DocBlock\Tags\Link;

/**
 * Class ReportFacade
 * @package Src\dmitrii\structural\facade
 */
class ReportFacade
{
    /**
     * @var ExcelReport
     */
    private ExcelReport $excel;
    /**
     * @var PdfReport
     */
    private PdfReport $pdf;
    /**
     * @var Sender
     */
    private Sender $sender;

    /**
     * ReportFacade constructor.
     * @param Sender|null $sender
     * @param ExcelReport|null $excel
     * @param PdfReport|null $pdf
     */
    public function __construct(Sender $sender = null, ExcelReport $excel = null, PdfReport $pdf = null)
    {
        /**
         * В идеале в фасаде не должно быть создания классов через new
         * Надо использовать DI через IoC-контейнер
         */
        $this->sender = $sender ?? new Sender();
        $this->excel = $excel ?? new ExcelReport();
        $this->pdf = $pdf ?? new PdfReport();
    }

    /**
     * Урезанный функционал нескольких библиотек
     *
     * @param array $data
     * @return bool
     */
    public function report(array $data): bool
    {
        $excelFile = $this->excel->createFile($data);
        $pdfFile = $this->pdf->createFile($data);

        $this->sender->attach($excelFile);
        $this->sender->attach($pdfFile);
        $this->sender->send();

        return true;
    }
}
