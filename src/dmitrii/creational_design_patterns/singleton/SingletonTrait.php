<?php


namespace Src\dmitrii\creational_design_patterns\singleton;


trait SingletonTrait
{
    protected static $instance;

    protected function __construct()
    {
        //
    }

    public function getInstance()
    {
        if (static::$instance === null) {
            static::$instance = new static;
            return static::$instance;
        }

        return static::$instance;
    }

    protected function __clone()
    {
        // TODO: Implement __clone() method.
    }

    public function __wakeup()
    {
        throw new \Exception("Cannot unserialize singleton");
    }
}