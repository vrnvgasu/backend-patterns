<?php


namespace Src\dmitrii\creational_design_patterns\static_factory;


class StaticFactory
{
    public static function createUser(string $role)
    {
        $class =  __NAMESPACE__ . '\\roles\\' . $role;

        if (class_exists($class)) {
            return new $class();
        } else {
            throw new \Exception('Role doesn\'t exits');
        }
    }
}