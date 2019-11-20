<?php


namespace Src\dmitrii\creational_design_patterns\static_factory\roles;


abstract class Role
{
    protected $addAdmins;
    protected $addModerators;
    protected $addPosts;
    protected $addComments;

    public function __construct()
    {
        $this->addAdmins = false;
        $this->addModerators = false;
        $this->addPosts = false;
        $this->addComments = false;
    }
}