<?php

namespace Src\dmitrii\behavioral\strategy;

use Carbon\Carbon;
use Src\dmitrii\behavioral\strategy\strategies\Salary;

class SalaryCounter
{
    protected $strategy;

    public function __construct(Salary $strategy)
    {
        $this->setStrategy($strategy);
    }

    public function setStrategy(Salary $strategy): self
    {
        $this->strategy = $strategy;

        return $this;
    }

    public function count(array $users, Carbon $startDate, Carbon $endDate): array
    {
        return $this->strategy->calculate($users, $startDate, $endDate);
    }
}
