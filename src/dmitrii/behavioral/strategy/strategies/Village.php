<?php

namespace Src\dmitrii\behavioral\strategy\strategies;

use Carbon\Carbon;
use Src\dmitrii\behavioral\strategy\Position;
use Src\dmitrii\behavioral\strategy\UserInterface;

class Village extends AbstractStrategy
{
    protected function calculateUser(UserInterface $user, Carbon $startDate, Carbon $endDate): array
    {
        $position = $user->getPosition();
        $rate = Position::getRate($position);
        $period = $endDate->diffInDays($startDate);

        return [$user->getName() => $rate * $period];
    }
}
