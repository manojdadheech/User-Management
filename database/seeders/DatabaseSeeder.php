<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Storage;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        Storage::disk('public')->makeDirectory('photos');

        for ($i = 1; $i <= 5; $i++) {
            $user = User::create([
                'prefixname' => 'Mr.',
                'firstname' => 'John' . $i,
                'middlename' => 'Middle' . $i,
                'lastname' => 'Doe' . $i,
                'suffixname' => 'Jr.',
                'username' => 'john_doe' . $i,
                'email' => 'john' . $i . '@example.com',
                'type' => 'user',
                'photo' => null, // or upload a dummy image
            ]);
        }
       
    }
}
