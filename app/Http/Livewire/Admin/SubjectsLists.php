<?php

namespace App\Http\Livewire\Admin;

use App\Models\Subject;
use Livewire\Component;
use Livewire\WithPagination;

class SubjectsLists extends Component
{ 
    use WithPagination;

    protected $paginationTheme = 'bootstrap';

    public function updatingsearch(){
        $this->resetPage();
    }
    public function render()
    {
        $subjects = Subject::paginate(20);

        return view('livewire..admin.subjects-lists', compact("subjects"));
    }
}
