<?php


namespace Tests\dmitrii\creational_design_patterns\pool;


use PHPUnit\Framework\TestCase;
use Src\dmitrii\creational_design_patterns\pool\Pool;

class PoolTest extends TestCase
{
    /**
     *
     */
    public function testPool()
    {
        $pool = new Pool();

        $timeStart = time();
        $worker_1 = $pool->get('worker_1', 40000000);
        // займет больше секунды
        $this->assertTrue(time() > $timeStart);

        // получим моментально
        $timeStart = time();
        $workers_2 = $pool->get('worker_1', 999999999999999999);
        $this->assertTrue(time() === $timeStart);

        // увидим время затраченное на создание $worker_1
        echo $workers_2->getTimeForCreation();

        $worker_3 = $pool->get('worker_3', 0);

        $this->assertNotSame($worker_1, $worker_3);
    }
}