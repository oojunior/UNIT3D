<?php

namespace Tests\Feature\Http\Controllers;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

/**
 * @see \App\Http\Controllers\CategoryController
 */
class CategoryControllerTest extends TestCase
{
    use RefreshDatabase;

    /**
     * @test
     */
    public function index_returns_an_ok_response()
    {
$this->markTestIncomplete('This test case was generated by Shift. When you are ready, remove this line and complete this test case.');

$user = factory(\App\Models\User::class)->create();

$response = $this->actingAs($user)->get(route('categories.index'));

$response->assertOk();
$response->assertViewIs('category.index');
$response->assertViewHas('categories');

        // TODO: perform additional assertions
    }

    /**
     * @test
     */
    public function show_returns_an_ok_response()
    {
$this->markTestIncomplete('This test case was generated by Shift. When you are ready, remove this line and complete this test case.');

$category = factory(\App\Models\Category::class)->create();
$user = factory(\App\Models\User::class)->create();

$response = $this->actingAs($user)->get(route('categories.show', ['id' => $category->id]));

$response->assertOk();
$response->assertViewIs('category.show');
$response->assertViewHas('torrents');
$response->assertViewHas('user');
$response->assertViewHas('category');
$response->assertViewHas('personal_freeleech');

        // TODO: perform additional assertions
    }

    // test cases...
}