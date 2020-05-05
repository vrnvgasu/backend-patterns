<?php

namespace Src\dmitrii\more\repository\Interfaces;

interface EmailInterface
{
    public function toSting(): string;

    public function validate(): bool;
}
