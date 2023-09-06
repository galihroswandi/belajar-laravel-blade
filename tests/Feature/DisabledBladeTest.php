<?php

namespace Tests\Feature;

use Tests\TestCase;

class DisabledBladeTest extends TestCase
{
    public function testDisabledBlade()
    {
        $this->view('disabled', ['name' => "Jhon"])
            ->assertDontSeeText('Jhon')
            ->assertSeeText('Hello {{ $name }}');
    }
}