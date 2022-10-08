<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class FormTest extends TestCase
{
    public function testForm()
    {
        $this->view("form", ["user" => [
            "premium" => true,
            "name" => "Iqbal",
            "admin" => true
        ]])
            ->assertSee("checked")
            ->assertSee("Iqbal")
            ->assertDontSee("readonly");
        $this->view("form", ["user" => [
            "premium" => false,
            "name" => "Iqbal",
            "admin" => false
        ]])
            ->assertDontSee("checked")
            ->assertSee("Iqbal")
            ->assertSee("readonly");
    }
}
