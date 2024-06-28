<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;
use App\Models\User;

class TrackVisitTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function it_tracks_a_visit()
    {
        $user = User::factory()->create(['external_id' => '12345']);

        $response = $this->get('/api/track-visit/12345');

        $response->assertStatus(200);
        $this->assertDatabaseHas('visits', ['user_id' => $user->id]);
    }

    /** @test */
    public function it_tracks_visits_idempotently()
    {
        $user = User::factory()->create(['external_id' => '12345']);

        $this->get('/api/track-visit/12345');
        $this->get('/api/track-visit/12345');

        $this->assertDatabaseCount('visits', 1);
    }
}

