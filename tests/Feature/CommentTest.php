<?php

namespace Tests\Feature;

use Tests\TestCase;

class CommentTest extends TestCase
{
    public function testComment()
    {
        $this->view('comment')
            ->assertSeeText('Hello Ini Komentar')
            ->assertDontSeeText('Ini adalah komentar');

    }
}