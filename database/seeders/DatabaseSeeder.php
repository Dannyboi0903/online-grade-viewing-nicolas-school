<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Role;
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
        Role::create([
            'name' => 'Acad Chairperson'
        ]);

        User::create([
            'name' => 'Daniel Casipong',
            'username' => 'dcasipong',
            'password' => bcrypt('dan123'),
            'role_id' => 1
        ]);
    }
}
