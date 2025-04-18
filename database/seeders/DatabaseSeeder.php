<?php

namespace Database\Seeders;

use App\Models\Company;
use App\Models\Jobseeker;
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
        $users = User::factory(20)->create();

        // Assign 15 as jobseekers
        foreach ($users->take(15) as $user) {
            Jobseeker::factory()->create([
                'user_id' => $user->id,
            ]);
        }

        // Assign the remaining 5 as companies
        foreach ($users->slice(15) as $user) {
            Company::factory()->create([
                'user_id' => $user->id,
            ]);
        }
    }
}
