<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class HelloTest extends TestCase
{
    public function testHello()
    {
        $this->get('/hello')
            ->assertSeeText("Syaiful Iqbal");
    }
    public function testHelloWorld()
    {
        $this->get('/world')
            ->assertSeeText("Syaiful Iqbal");
    }
    public function testHelloView()
    {
        $this->view('/hello', ['name' => 'Syaiful Iqbal'])
            ->assertSeeText("Syaiful Iqbal");
    }
    public function testHelloWorldView()
    {
        $this->view('/hello.world', ['name' => 'Syaiful Iqbal'])
            ->assertSeeText("Syaiful Iqbal");
    }
}
