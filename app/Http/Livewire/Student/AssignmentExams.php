<?php

namespace App\Http\Livewire\Student;

use App\Models\AssignmentExam;
use App\Models\StudentUser;
use App\Models\Subject;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Livewire\WithPagination;

class AssignmentExams extends Component
{
    use WithPagination;

    protected $paginationTheme = 'bootstrap';

    public function updatingsearch()
    {
        $this->resetPage();
    }

    public function render()
    {
        $trayecto = StudentUser::where("id_identifier", Auth::user()->id_identifier)->value("trayecto");
        $subject = Subject::where("trayecto", $trayecto)->value("id");
        $exams = AssignmentExam::where("id_identifier_subject", $subject)->paginate(5);
        return view('livewire..student.assignment-exams', compact("exams"));
    }
}
