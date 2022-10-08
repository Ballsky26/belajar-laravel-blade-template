<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class IfStatementTest extends TestCase
{
    public function testIfStatement()
    {
        $this->view("if", ["hobbies" => []])
            ->assertSeeText("Saya Tidak Mempunyai Hobi", false);

        $this->view("if", ["hobbies" => ["Football"]])
            ->assertSeeText("Saya Mempunyai Hobi");

        $this->view("if", ["hobbies" => ["Football", "Coding"]])
            ->assertSeeText("Saya Mempunyai Banyak Hobi");
    }
}
