<?php

namespace Src\dmitrii\structural\bridge;

interface Implementation
{
    /**
     * @param string $title
     * @return $this
     */
    public function setTitle(string $title): self;

    /**
     * @param string $row
     * @return $this
     */
    public function addRow(string $row): self;

    /**
     * @return string
     */
    public function save(): string;
}