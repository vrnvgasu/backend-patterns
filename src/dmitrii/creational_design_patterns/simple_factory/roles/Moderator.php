<?php


namespace Src\dmitrii\creational_design_patterns\simple_factory\roles;


class Moderator extends Role
{
    public function __construct()
    {
        parent::__construct();
        $this->addPosts = true;
        $this->addComments = true;
    }
}