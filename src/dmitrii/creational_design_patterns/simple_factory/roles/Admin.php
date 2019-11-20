<?php


namespace Src\dmitrii\creational_design_patterns\simple_factory\roles;


class Admin extends Role
{
    public function __construct()
    {
        $this->addAdmins = true;
        $this->addModerators = true;
        $this->addPosts = true;
        $this->addComments = true;
    }
}