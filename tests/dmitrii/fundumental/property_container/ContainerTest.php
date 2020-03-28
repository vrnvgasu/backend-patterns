<?php

namespace Tests\dmitrii\fundumental\property_container;

use PHPUnit\Framework\TestCase;
use Src\dmitrii\fundumental\property_container\Post;

class ContainerTest extends TestCase
{
    public function testContainer()
    {
        $post = new Post();

        $this->assertNull($post->getProperty('title'));

        $this->expectExceptionMessage('title not exist.');
        $post->setProperty('title', 'Bye');

        $post->addProperty('title', 'Hello!');
        $this->assertEquals('Hello!', $post->getProperty('title'));

        $post->setProperty('title', 'Bye');
        $this->assertEquals('Bye', $post->getProperty('title'));

        $post->deleteProperty('title');
        $this->assertNull($post->getProperty('title'));
    }
}
