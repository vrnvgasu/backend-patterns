<?php

namespace Src\dmitrii\behavioral\strategy\strategies;

use Carbon\Carbon;
use Src\dmitrii\behavioral\strategy\UserInterface;

abstract class AbstractStrategy implements Salary
{
    public function calculate(array $users, Carbon $startDate, Carbon $endDate): array
    {
        $period = $endDate->diffInDays($startDate);

        foreach ($users as $user) {
            $result[] = $this->calculateUser($user, $startDate, $endDate);
        }

        return $result ?? [];
    }

    abstract protected function calculateUser(UserInterface $user, Carbon $startDate, Carbon $endDate): array;
}
