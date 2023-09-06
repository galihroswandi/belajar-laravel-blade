<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class IfBladeTest extends TestCase
{
    public function testIfBlade()
    {
        $this->view('if', ['hobbies' => []])
            ->assertSeeText("I do not have hobbie!");

        $this->view('if', ['hobbies' => ['football']])
            ->assertSeeText('I have one hobbie!');

        $this->view('if', ['hobbies' => ['football', 'basketball']])
            ->assertSeeText('I have multiple hobbie!');
    }
}