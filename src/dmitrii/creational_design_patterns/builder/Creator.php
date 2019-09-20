<?php


namespace Src\dmitrii\creational_design_patterns\builder;


class Creator
{
    /** Создатель строит строение с одник окном и дверью
     * @param BuilderHouse $builder
     * @return House
     */
    public function build(BuilderHouse $builder): House
    {
        $builder->createHouse();
        $builder->addDoor();
        $builder->addWindow();

        return $builder->getHouse();
    }
}