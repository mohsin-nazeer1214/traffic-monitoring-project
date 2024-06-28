<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Visit;

class VisitSeeder extends Seeder
{
    public function run()
    {
        $users = User::all();

        foreach ($users as $user) {
            Visit::create([
                'user_id' => $user->id,
            ]);
        }
    }
}


