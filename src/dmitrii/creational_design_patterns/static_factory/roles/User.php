<?php


namespace Src\dmitrii\creational_design_patterns\static_factory\roles;


class User extends Role
{
    public function __construct()
    {
        parent::__construct();
        $this->addComments = true;
    }
}