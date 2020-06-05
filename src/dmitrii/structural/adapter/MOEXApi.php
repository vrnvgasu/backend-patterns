<?php

namespace Src\dmitrii\structural\adapter;

use Carbon\Carbon;

class MOEXApi
{
    public function indices(string $share, Carbon $date): array
    {
        // connecting
        // get data

        return [
            'share' => $share,
            'date' => $date->format('Y-m-d H:i:s'),
            'indices' => 50.00,
        ];
    }
}
