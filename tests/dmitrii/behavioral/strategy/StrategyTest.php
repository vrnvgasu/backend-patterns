<?php

namespace Tests\dmitrii\behavioral\strategy;

use Carbon\Carbon;
use PHPUnit\Framework\TestCase;
use Src\dmitrii\behavioral\strategy\SalaryCounter;
use Src\dmitrii\behavioral\strategy\strategies\Moscow;
use Src\dmitrii\behavioral\strategy\strategies\Village;
use Src\dmitrii\behavioral\strategy\User;

class StrategyTest extends TestCase
{
    public function testStrategy()
    {
        $dispatcher = new User('Ron', 'dispatcher');
        $courier = new User('Sara', 'courier');

        $salaryCounter = new SalaryCounter(new Moscow());

        $this->assertEquals([
            ['Ron' => 4100],
            ['Sara' => 6500],
        ], $salaryCounter->count([$dispatcher, $courier], Carbon::now(), Carbon::now()->subDays(10)));

        $salaryCounter->setStrategy(new Village());

        $this->assertEquals([
            ['Ron' => 3000],
            ['Sara' => 5000],
        ], $salaryCounter->count([$dispatcher, $courier], Carbon::now(), Carbon::now()->subDays(10)));
    }
}
