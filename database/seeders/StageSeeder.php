<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Stage;

class StageSeeder extends Seeder
{
    public function run()
    {
        $users = User::all();

        foreach ($users as $user) {
            Stage::create([
                'user_id' => $user->id,
                'stage' => 'visited',
            ]);
        }
    }
}

