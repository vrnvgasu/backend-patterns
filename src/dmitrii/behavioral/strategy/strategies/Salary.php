<?php

namespace Src\dmitrii\behavioral\strategy\strategies;

use Carbon\Carbon;

interface Salary
{
    public function calculate(array $users, Carbon $startDate, Carbon $endDate): array;
}
