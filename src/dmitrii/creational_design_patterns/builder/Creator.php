<?php


namespace Src\dmitrii\creational_design_patterns\builder;


class Creator
{
    public function build(BuilderHouse $builder): House
    {
        $builder->createHouse();
        $builder->addDoor();
        $builder->addWindow();

        return $builder->getHouse();
    }
}