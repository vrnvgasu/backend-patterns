<?php

namespace Src\dmitrii\creational_design_patterns\builder\example_1;

use Src\dmitrii\creational_design_patterns\builder\example_1\builders\BuilderHouse;
use Src\dmitrii\creational_design_patterns\builder\example_1\houses\House;

class Director
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
