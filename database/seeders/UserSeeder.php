<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    public function run()
    {
        User::create([
            'external_id' => 'user1',
        ]);

        User::create([
            'external_id' => 'user2',
        ]);

    }
}
