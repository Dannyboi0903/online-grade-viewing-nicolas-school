<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use App\Models\AcadChairperson;

class AdminUserSeeder extends Seeder
{
    public function run()
    {
        DB::table('tbl_acad_chairperson')->insert([
            'username' => 'admin123',
            'password' => Hash::make('secret_password'), // Correct way to hash the password
        ]);

        // If you want to see the hashed password in the console, you can use this
        // Uncomment the next line if you want to see the hashed password
        // echo Hash::make('secret_password');
    }
}
