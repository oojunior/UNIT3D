<?php

namespace Tests\Feature\Http\Controllers\API;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

/**
 * @see \App\Http\Controllers\API\TorrentController
 */
class TorrentControllerTest extends TestCase
{


    /**
     * @test
     */
    public function filter_returns_an_ok_response()
    {
$this->markTestIncomplete('This test case was generated by Shift. When you are ready, remove this line and complete this test case.');

$user = factory(\App\Models\User::class)->create();

$response = $this->actingAs($user, 'api')->getJson('api/torrents/filter');

$response->assertOk();
$response->assertJsonStructure([
            // TODO: compare expected response data
        ]);

        // TODO: perform additional assertions
    }

    /**
     * @test
     */
    public function index_returns_an_ok_response()
    {
$this->markTestIncomplete('This test case was generated by Shift. When you are ready, remove this line and complete this test case.');

$user = factory(\App\Models\User::class)->create();

$response = $this->actingAs($user, 'api')->getJson(route('torrents.index'));

$response->assertOk();
$response->assertJsonStructure([
            // TODO: compare expected response data
        ]);

        // TODO: perform additional assertions
    }

    /**
     * @test
     */
    public function show_returns_an_ok_response()
    {
$this->markTestIncomplete('This test case was generated by Shift. When you are ready, remove this line and complete this test case.');

$torrent = factory(\App\Models\Torrent::class)->create();
$user = factory(\App\Models\User::class)->create();

$response = $this->actingAs($user, 'api')->getJson('api/torrents/{id}');

$response->assertOk();
$response->assertJsonStructure([
            // TODO: compare expected response data
        ]);

        // TODO: perform additional assertions
    }

    /**
     * @test
     */
    public function store_returns_an_ok_response()
    {
$this->markTestIncomplete('This test case was generated by Shift. When you are ready, remove this line and complete this test case.');

$user = factory(\App\Models\User::class)->create();

$response = $this->actingAs($user, 'api')->postJson('api/torrents/upload', [
            // TODO: send request data
        ]);

$response->assertOk();
$response->assertJsonStructure([
            // TODO: compare expected response data
        ]);

        // TODO: perform additional assertions
    }

    // test cases...
}