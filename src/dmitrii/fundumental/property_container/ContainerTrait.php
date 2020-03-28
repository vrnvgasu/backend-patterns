<?php

namespace Src\dmitrii\fundumental\property_container;

trait ContainerTrait
{
    /**
     * @var array
     */
    protected $container = [];

    /**
     * @param string $propertyName
     * @param $value
     */
    public function addProperty(string $propertyName, $value): void
    {
        $this->container[$propertyName] = $value;
    }

    /**
     * @param string $propertyName
     * @param $value
     * @throws \Exception
     */
    public function setProperty(string $propertyName, $value): void
    {
        if (!isset($this->container[$propertyName])) {
            throw new \Exception($propertyName . ' not exist.');
        }

        $this->container[$propertyName] = $value;
    }

    /**
     * @param string $propertyName
     */
    public function deleteProperty(string $propertyName): void
    {
        unset($this->container[$propertyName]);
    }

    /**
     * @param string $propertyName
     * @return |null
     */
    public function getProperty(string $propertyName)
    {
        return $this->container[$propertyName] ?? null;
    }
}
