<?php

namespace Src\dmitrii\structural\adapter;

use DateTimeImmutable;

interface ApiInterface
{
    /**
     * @param string $stock
     * @param DateTimeImmutable $date
     * @return int
     */
    public function getQuote(string $stock, DateTimeImmutable $date): int;
}
