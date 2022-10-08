<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class EachTest extends TestCase
{
    public function testEach()
    {
        $this->view("each", ["users" => [
            [
                "name" => "Syaiful",
                "hobbies" => ["Coding", "Gaming"]
            ],
            [
                "name" => "Iqbal",
                "hobbies" => ["Coding", "Gaming"]
            ]
        ]])
            ->assertSeeInOrder([
                ".red",
                "Syaiful",
                "Coding",
                "Gaming",
                "Iqbal",
                "Coding",
                "Gaming"
            ]);
    }
}
