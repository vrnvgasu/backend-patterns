<?php


namespace Src\dmitrii\creational_design_patterns\singleton;


class Config implements SingletonInterface
{
    protected static $values = [];

    use SingletonTrait;

    public function getValue(string $key)
    {
        return static::$values[$key] ?? null;
    }

    public function setValue($key, $value): bool
    {
        static::$values[$key] = $value;

        return true;
    }
}