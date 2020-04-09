<?php

namespace Src\dmitrii\behavioral\strategy;

class User implements UserInterface
{
    protected $name;

    protected $position;

    public function __construct(string $name, string $position)
    {
        $this->name = $name;
        $this->position = in_array($position, Position::getPositions()) ? $position : Position::getDefaultPosition();
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getPosition(): string
    {
        return $this->position;
    }
}
