<?php


namespace Src\dmitrii\creational_design_patterns\simple_factory\roles;


class User extends Role
{
    public function __construct()
    {
        parent::__construct();
        $this->addComments = true;
    }
}