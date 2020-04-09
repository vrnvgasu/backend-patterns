<?php

namespace Src\dmitrii\behavioral\strategy\strategies;

use Carbon\Carbon;
use Src\dmitrii\behavioral\strategy\Position;
use Src\dmitrii\behavioral\strategy\UserInterface;

class Moscow extends AbstractStrategy implements Salary
{
    protected function calculateUser(UserInterface $user, Carbon $startDate, Carbon $endDate): array
    {
        $position = $user->getPosition();
        $rate = Position::getRate($position);
        $period = $endDate->diffInDays($startDate);

        return [$user->getName() => $rate * 1.2 * $period + 500];
    }
}
