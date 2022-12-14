<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(RolSeeder::class);
        $this->call(PeriodSeeder::class);
        // $this->call(SubjectSeeder::class);       
        $this->call(TeacherUserSeeder::class);

        $this->call(SectionSeeder::class);
        $this->call(AssignmentExamSeeder::class);

        $this->call(AdminUserSeeder::class);
        $this->call(UserSeeder::class);

        $this->call(SalonSeed::class);
    }
}
