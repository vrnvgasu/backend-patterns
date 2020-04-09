<?php

namespace Src\dmitrii\behavioral\strategy;

class Position
{
    const COURIER = 'courier';
    const DISPATCHER = 'dispatcher';

    public static function getPositions()
    {
        return [
            static::COURIER,
            static::DISPATCHER,
        ];
    }

    public static function getDefaultPosition()
    {
        return static::DISPATCHER;
    }

    public static function getRate(string $position)
    {
        switch ($position) {
            case static::COURIER:
                return 500;
            case static::DISPATCHER:
                return 300;
        }
    }
}
