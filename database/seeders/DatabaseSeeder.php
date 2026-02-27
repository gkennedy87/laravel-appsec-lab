<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Organization;
use App\Models\Deal;
use App\Models\Contact;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
{
    // 1. Create 10 Organizations
    $organizations = Organization::factory(10)->create();

    $organizations->each(function ($org) {
        // 2. Create 3 Users for each Organization
        $users = User::factory(3)->create([
            'organization_id' => $org->id
        ]);

        // 3. Create 5 Deals for each Organization
        // We assign a random user from the SAME organization as the owner
        Deal::factory(5)->create([
            'organization_id' => $org->id,
            'owner_id'        => $users->random()->id,
        ]);
        
        // 4. (Optional) Create some Contacts for the Org
         Contact::factory(10)->create(['organization_id' => $org->id]);
    });
}
}
