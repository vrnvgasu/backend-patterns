<?php


namespace Src\dmitrii\creational_design_patterns\pool;


class Pool
{
    protected $instances = [];

    public function get(string $key, int $param)
    {
        if (isset($this->instances[$key])) {
            return $this->instances[$key];
        } else {
            $this->instances[$key] = new Worker($key, $param);
            return $this->instances[$key];
        }
    }
}