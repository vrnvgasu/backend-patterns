<?php


namespace Src\dmitrii\creational_design_patterns\prototype;


class Author
{
    public $name;
    public $comments = [];

    /**
     * Author constructor.
     * @param string $name
     */
    public function __construct(string $name)
    {
        $this->name = $name;
    }

    /**
     * @param Comment $comment
     */
    public function addComment(Comment $comment)
    {
        $this->comments[] = $comment;
    }
}