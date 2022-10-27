<?php

namespace Database\Seeders;

use App\Models\AssignmentExam;
use App\Models\Subject;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AssignmentExamSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    { 
        $total = Subject::all()->count();
        for ($i=1; $i <= $total ; $i++) { 
            // $id = Subject::all()->random()->id;
            AssignmentExam::factory(10)->create([
                "id_identifier_subject" => $i,
            ]);
        }
    }
}
