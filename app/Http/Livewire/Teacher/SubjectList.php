<?php

namespace App\Http\Livewire\Teacher;

use App\Models\Subject;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class SubjectList extends Component
{
    public function render()
    {
        $subjects = Subject::where("id_identifier_teacher", Auth::user()->id)->paginate(20);
        return view('livewire..teacher.subject-list', compact("subjects"));
    }
}
