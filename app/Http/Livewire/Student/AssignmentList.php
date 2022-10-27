<?php

namespace App\Http\Livewire\Student;

use Livewire\Component;

use Livewire\WithPagination;
use App\Models\Subject;
use App\Models\Section;
use App\Models\StudentUser;

use Illuminate\Support\Facades\Auth;

class AssignmentList extends Component
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

        $section = Section::where("id", $user->trayecto)->first();

        if ($section == null) {
            $assignments = null;
        } else {
            $assignments = Subject::where("trayecto", $section->id)->paginate(5);
        }
        return view('livewire..student.assignment-list', compact("assignments"));
    }
}
