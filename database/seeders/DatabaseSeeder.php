<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        \App\Models\User::create([
            'name' => 'User',
            'email' => 'user@test.com',
            'password' => Hash::make('password'),
        ]);

        \App\Models\Category::create([
            'name' => 'mens',
        ]);
        \App\Models\Category::create([
            'name' => 'womens',
        ]);
        \App\Models\Category::create([
            'name' => 'kids',
        ]);
    }
}
