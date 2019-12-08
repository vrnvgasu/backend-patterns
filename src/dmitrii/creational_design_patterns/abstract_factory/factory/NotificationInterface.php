<?php


namespace Src\dmitrii\creational_design_patterns\abstract_factory\factory;


use Src\dmitrii\creational_design_patterns\abstract_factory\logger\BodyInterface;
use Src\dmitrii\creational_design_patterns\abstract_factory\logger\MetaInterface;

interface NotificationInterface
{
    /**
     * @return MetaInterface
     */
    public function createMeta(): MetaInterface;

    /**
     * @return BodyInterface
     */
    public function createBody(): BodyInterface;
}