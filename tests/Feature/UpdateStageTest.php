<?php
namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;
use App\Models\User;
use App\Models\Stage;

class UpdateStageTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function it_updates_user_stage()
    {
        $user = User::factory()->create(['external_id' => '12345']);

        $response = $this->post('/api/update-stage', [
            'externalId' => '12345',
            'stage' => 'visited'
        ]);

        $response->assertStatus(200);
        $this->assertDatabaseHas('stages', ['user_id' => $user->id, 'stage' => 'visited']);
    }

    /** @test */
    public function it_does_not_allow_invalid_stages()
    {
        $user = User::factory()->create(['external_id' => '12345']);

        $response = $this->postJson('/api/update-stage', [
            'externalId' => '12345',
            'stage' => 'invalid_stage'
        ]);

        $response->assertStatus(422)
                 ->assertJsonValidationErrors('stage');
    }
}
