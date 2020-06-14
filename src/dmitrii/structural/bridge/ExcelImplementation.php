<?php

namespace Src\dmitrii\structural\bridge;

class ExcelImplementation implements Implementation
{
    /** @var string  */
    protected string $title;
    /** @var array  */
    protected array $body = [];

    /**
     * @param string $title
     * @return $this
     */
    public function setTitle(string $title): Implementation
    {
        $this->title = $title;

        return $this;
    }

    /**
     * @param string $row
     * @return $this
     */
    public function addRow(string $row): Implementation
    {
        $this->body[] = $row;
    }

    /**
     * @return string
     */
    public function save(): string
    {
        return 'save report to excel with title: ' . $this->title;
    }
}
