<?php

namespace Tests\dmitrii\tests\creational_design_patterns\prototype;

use PHPUnit\Framework\TestCase;
use Src\dmitrii\creational_design_patterns\prototype\Author;
use Src\dmitrii\creational_design_patterns\prototype\Comment;

class PrototypeTest extends TestCase
{
    /**
     * @throws \Exception
     */
    public function testPrototype()
    {
        $author = new Author('Spamer');
        $comment = new Comment('comment', new \DateTime(), $author, 'chat');

        foreach ($this->spamGenerator($comment) as $spam) {
            $this->assertInstanceOf(Comment::class, $spam);
            // у всех комментариев один автор
            $this->assertSame($author, $spam->author);
            // у автора появляется новый комментарий
            $this->assertTrue(in_array($spam, $author->comments));
            // клон является другим объектов
            $this->assertNotSame($spam, $comment);
            // дата комментария является другим объектом
            $this->assertNotSame($spam->date, $comment->date);
            // все комментарии относятся к одному форуму
            $this->assertSame($spam->forum, $comment->forum);
        }
    }

    /**
     * @param $comment
     * @return \Generator
     */
    public function spamGenerator($comment)
    {
        for ($i = 0; $i < 100; $i++) {
            $spam = clone $comment;
            $spam->text = rand();
            yield $spam;
        }
    }
}
