<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Project;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory(10)->count(200)->create();
        User::query()->inRandomOrder()->limit(10)->get()->each(fn(User $u) => 
            Project::factory()->create(['created_by' => $u->id]));
    }
}
