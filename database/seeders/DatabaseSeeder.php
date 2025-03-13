<?php

namespace Database\Seeders;

use App\Models\Link;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        for ($i=0; $i < 10; $i++) {
            $user = User::create([
                'name' => fake()->name,
                'email' => fake()->email,
                'password' => 12345678,
            ]);

            $random = random_int(1, 10);
            for ($j=0; $j < $random; $j++) {
                Link::create([
                    'user_id' => $user->id,
                    'original_url' => fake()->url,
                ]);

            }

        }

    }
}
