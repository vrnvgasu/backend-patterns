<?php


namespace Src\dmitrii\creational_design_patterns\abstract_factory\factory;


use Src\dmitrii\creational_design_patterns\abstract_factory\logger\BodyDander;
use Src\dmitrii\creational_design_patterns\abstract_factory\logger\BodyInterface;
use Src\dmitrii\creational_design_patterns\abstract_factory\logger\MetaDanger;
use Src\dmitrii\creational_design_patterns\abstract_factory\logger\MetaInterface;

class NotificationDanger implements NotificationInterface
{
    /**
     * @return MetaInterface
     */
    public function createMeta(): MetaInterface
    {
        return new MetaDanger();
    }

    /**
     * @return BodyInterface
     */
    public function createBody(): BodyInterface
    {
        return new BodyDander();
    }
}