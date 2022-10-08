<?php

namespace App\Http\Livewire\Student;

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
        $user = StudentUser::where("id_identifier", Auth::user()->id_identifier)->first();
        
        $subjects = Subject::where("trayecto", $user->trayecto)->with("id_examen")->paginate(5);  

        return view('livewire..student.assignment-exams', compact("subjects"));
    }
}
