<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class IssetEmptyTest extends TestCase
{
    public function testIssetEmpty()
    {
        $this->view("isset-empty", [])
            ->assertDontSeeText("Hello")
            ->assertSeeText("Saya tidak mempunyai Hobi", false);

        $this->view("isset-empty", ["name" => "Iqbal"])
            ->assertSeeText("Hello, Nama saya adalah Iqbal")
            ->assertSeeText("Saya tidak mempunyai Hobi", false);

        $this->view("isset-empty", ["name" => "Iqbal", "hobbies" => ["Coding"]])
            ->assertSeeText("Hello, Nama saya adalah Iqbal")
            ->assertDontSeeText("Saya tidak mempunyai Hobi", false);
    }
}
