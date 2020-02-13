<?php

namespace Tests\Feature\Http\Controllers\Staff;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

/**
 * @see \App\Http\Controllers\Staff\CheaterController
 */
class CheaterControllerTest extends TestCase
{


    /**
     * @test
     */
    public function index_returns_an_ok_response()
    {
$this->markTestIncomplete('This test case was generated by Shift. When you are ready, remove this line and complete this test case.');

$user = factory(\App\Models\User::class)->create();

$response = $this->actingAs($user)->get(route('staff.cheaters.index'));

$response->assertOk();
$response->assertViewIs('Staff.cheater.index');
$response->assertViewHas('cheaters');

        // TODO: perform additional assertions
    }

    // test cases...
}