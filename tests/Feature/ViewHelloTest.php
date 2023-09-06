<?php

namespace Tests\Feature;

use Tests\TestCase;

class ViewHelloTest extends TestCase
{
    public function testRouteHello()
    {
        $this->get('/hello')
            ->assertSeeText("Hello Jhon Doe");
    }

    public function testRouteNested()
    {
        $this->get('/world')
            ->assertSeeText('Hello From JhonDoe');
    }

    public function testViewHello()
    {
        $this->view("hello", ['name' => "Jhon Doe"])
            ->assertSeeText('Hello Jhon Doe');
    }

    public function testViewNested()
    {
        $this->view('hello.world', ['title' => "Test Nested", 'name' => "Jhon"])
            ->assertSeeText('Hello From Jhon');
    }
}