<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class ForElseTest extends TestCase
{
    public function testForElse()
    {
        $this->view("forelse", ["hobbies" => []])
            ->assertDontSeeText("Coding")
            ->assertDontSeeText("Gaming")
            ->assertSeeText("Tidak Punya Hobby");

        $this->view("forelse", ["hobbies" => ["Coding", "Gaming"]])
            ->assertSeeText("Coding")
            ->assertSeeText("Gaming")
            ->assertDontSeeText("Tidak Punya Hobby");
    }
}
