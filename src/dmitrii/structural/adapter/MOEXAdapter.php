<?php

namespace Src\dmitrii\structural\adapter;

use Carbon\Carbon;
use DateTimeImmutable;

class MOEXAdapter implements ApiInterface
{
    /**
     * @var MOEXApi
     */
    protected MOEXApi $api;

    /**
     * MOEXAdapter constructor.
     * @param MOEXApi $api
     */
    public function __construct(MOEXApi $api)
    {
        $this->api = $api;
    }

    /**
     * @param string $stock
     * @param DateTimeImmutable $date
     * @return int
     */
    public function getQuote(string $stock, DateTimeImmutable $date): int
    {
        $data = $this->api->indices($stock, Carbon::parse($date->format('Y-m-d H:i:s')));

        return round($data['indices']);
    }
}
