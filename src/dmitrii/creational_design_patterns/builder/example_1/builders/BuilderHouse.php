<?php

namespace Src\dmitrii\creational_design_patterns\builder\example_1\builders;

use Src\dmitrii\creational_design_patterns\builder\example_1\houses\House;

interface BuilderHouse
{
    /** добавить окно в строение
     * @return mixed
     */
    public function addWindow();

    /** добавить дверь в строение
     * @return mixed
     */
    public function addDoor();

    /** получить строение
     * @return House
     */
    public function getHouse(): House;

    /** создать строение
     * @return mixed
     */
    public function createHouse();

    /** проверить наличие строения
     * @return mixed
     */
    public function checkHouse();
}
