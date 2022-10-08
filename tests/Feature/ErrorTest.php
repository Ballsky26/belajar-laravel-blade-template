<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class ErrorTest extends TestCase
{
    public function testError()
    {
        $errors = [
            "name" => "Nama harus di isi",
            "password" => "Password harus di isi"
        ];

        $this->withViewErrors($errors)
            ->view("error", [])
            ->assertSeeText("Nama harus di isi")
            ->assertSeeText("Password harus di isi");
    }
}
