<?php

namespace Src\dmitrii\structural\adapter;

use DateTimeImmutable;

class StockQuote
{
    /**
     * @var string
     */
    protected string $stock;
    /**
     * @var int
     */
    protected int $quote;
    /**
     * @var DateTimeImmutable
     */
    protected DateTimeImmutable $date;

    /**
     * StockQuote constructor.
     * @param string $stock
     */
    public function __construct(string $stock)
    {
        $this->stock = $stock;
    }

    /**
     * @param ApiInterface $api
     * @param DateTimeImmutable $date
     * @return $this
     */
    public function getQuote(ApiInterface $api, DateTimeImmutable $date): self
    {
        $this->quote = $api->getQuote($this->stock, $date);
        $this->date = $date;

        return $this;
    }

    /**
     * @return string
     */
    public function transformToJson(): string
    {
        return json_encode([
            'stock' => $this->stock,
            'quote' => $this->quote,
            'date' => $this->date->format('Y-m-d H:i:s'),
        ]);
    }
}
