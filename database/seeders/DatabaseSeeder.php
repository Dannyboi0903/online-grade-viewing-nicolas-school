<?php

namespace Database\Seeders;

use App\Models\AcadChairperson;
use App\Models\GradeLevel;
use App\Models\Section;
use App\Models\Strand;
use App\Models\Teacher;
use App\Models\User;
use App\Models\Role;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\UserRole;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();
        Role::insert([
            [
                'name' => 'Acad Chairperson'
            ],
            [
                'name' => 'Teacher'
            ],
            [
                'name' => 'Parent'
            ],
        ]);

        AcadChairperson::create([
            'name' => 'Admin',
            'username' => 'admin',
            'password' => 'admin',
            'role_id' => 1
        ]);

        Teacher::create([
            'first_name' => 'Dummy',
            'last_name' => 'Teacher',
            'username' => 'teacher',
            'show_password' => 'teacher',
            'password' => bcrypt('teacher'),
            'role_id' => 2
        ]);

        GradeLevel::insert([
            ['grade_lvl_num' => 7],
            ['grade_lvl_num' => 8],
            ['grade_lvl_num' => 9],
            ['grade_lvl_num' => 10],
            ['grade_lvl_num' => 11],
            ['grade_lvl_num' => 12],
        ]);

        Section::insert([
            ['section_num' => 1],
            ['section_num' => 2],
            ['section_num' => 3],
            ['section_num' => 4],
            ['section_num' => 5],
            ['section_num' => 6],
            ['section_num' => 7],
            ['section_num' => 8],
            ['section_num' => 9],
            ['section_num' => 10],
        ]);

        Strand::insert([
            ['strand_name' => 'ABM'],
            ['strand_name' => 'STEM'],
            ['strand_name' => 'HUMSS'],
            ['strand_name' => 'GAS'],
            ['strand_name' => 'TVL'],
            ['strand_name' => 'ICT'],
        ]);
    }
}
