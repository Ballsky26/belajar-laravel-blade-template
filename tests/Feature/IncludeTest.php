<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class IncludeTest extends TestCase
{
    public function testInclude()
    {
        $this->view("include", [])
            ->assertSeeText("Ballsky")
            ->assertSeeText("Selamat Datang di Web Kami")
            ->assertSeeText("Selamat Datang di Web");

        $this->view("include", ["title" => "Iqbal"])
            ->assertSeeText("Iqbal")
            ->assertSeeText("Selamat Datang di Web Kami")
            ->assertSeeText("Selamat Datang di Web");
    }
}
