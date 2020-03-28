<?php

namespace Src\dmitrii\fundumental\property_container;

interface ContainerInteface
{
    /**
     * @param string $propertyName
     * @param $value
     */
    public function addProperty(string $propertyName, $value): void;

    /**
     * @param string $propertyName
     * @param $value
     */
    public function setProperty(string $propertyName, $value): void;

    /**
     * @param string $propertyName
     */
    public function deleteProperty(string $propertyName): void;

    /**
     * @param string $propertyName
     * @return mixed
     */
    public function getProperty(string $propertyName);
}
