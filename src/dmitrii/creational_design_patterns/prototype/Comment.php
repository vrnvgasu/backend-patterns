<?php


namespace Src\dmitrii\creational_design_patterns\prototype;


class Comment implements PrototypeInterface
{
    public $text;
    public $date;
    public $author;
    public $forum;

    /**
     * Comment constructor.
     * @param string $text
     * @param \DateTime $date
     * @param Author $author
     * @param string $forum
     */
    public function __construct(string $text, \DateTime $date, Author $author, string $forum)
    {
        $this->text = $text;
        $this->date = $date;
        $this->author = $author;
        $this->forum = $forum;
    }

    /**
     * @throws \Exception
     */
    public function __clone()
    {
        $this->text = null;
        $this->date = new \DateTime();
        $this->author->addComment($this);
    }
}