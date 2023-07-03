<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call(UserSeeder::class);
        \App\Models\Category::factory(10)->create();
        \App\Models\Region::factory(10)->create();
        \App\Models\Town::factory(10)->create();
        \App\Models\Annonce::factory(30)->create();
        \App\Models\Discussion::factory(10)->create();
        \App\Models\Boost::factory(10)->create();
        // \App\Models\Comment::factory(10)->create();
        // \App\Models\Signal::factory(10)->create();
        \App\Models\Payment::factory(10)->create();
        \App\Models\Message::factory(10)->create();
        // \App\Models\User::factory(10)->create();
    }
}