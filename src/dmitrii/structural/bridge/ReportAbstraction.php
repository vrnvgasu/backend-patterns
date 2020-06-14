<?php

namespace Src\dmitrii\structural\bridge;

class ReportAbstraction
{
    /** @var Implementation  */
    protected Implementation $implementation;

    /**
     * Report constructor.
     * @param Implementation $implementation
     * @param string $title
     * @param array $table
     */
    public function __construct(Implementation $implementation)
    {
        $this->implementation = $implementation;
    }

    /**
     * @param Implementation $implementation
     * @return $this
     */
    public function changeImplementation(Implementation $implementation): self
    {
        $this->implementation = $implementation;

        return $this;
    }

    /**
     * @param string $title
     * @return $this
     */
    public function setTitle(string $title): self
    {
        $this->implementation->setTitle($title);

        return $this;
    }

    /**
     * @param string $row
     * @return $this
     */
    public function addRow(string $row): self
    {
        $this->implementation->addRow($row);

        return $this;
    }

    /**
     * @return string
     */
    public function save(): string
    {
       return $this->implementation->save();
    }
}
