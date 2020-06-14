<?php

namespace Src\dmitrii\structural\bridge;

class TxtImplementation implements Implementation
{
    /** @var string  */
    protected string $title;
    /** @var string  */
    protected string $body;

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
        $this->body .= $row . "\n";
    }

    /**
     * @return string
     */
    public function save(): string
    {
        return 'save report to txt with title: ' . $this->title;
    }
}
