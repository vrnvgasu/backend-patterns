<?php


namespace Src\dmitrii\creational_design_patterns\abstract_factory\factory;


use Src\dmitrii\creational_design_patterns\abstract_factory\logger\BodyInterface;
use Src\dmitrii\creational_design_patterns\abstract_factory\logger\BodySuccess;
use Src\dmitrii\creational_design_patterns\abstract_factory\logger\MetaInterface;
use Src\dmitrii\creational_design_patterns\abstract_factory\logger\MetaSuccess;

class NotificationSuccess implements NotificationInterface
{
    /**
     * @return MetaInterface
     */
    public function createMeta(): MetaInterface
    {
        return new MetaSuccess();
    }

    /**
     * @return BodyInterface
     */
    public function createBody(): BodyInterface
    {
        return new BodySuccess();
    }
}