<?php

namespace App\Http\Livewire\Admin;

use App\Models\TeacherUser;
use Livewire\Component;
use Livewire\WithPagination;

class UserTeacherLists extends Component
{
    use WithPagination;

    protected $paginationTheme = 'bootstrap';

    public function updatingsearch()
    {
        $this->resetPage();
    }

    public function render()
    {
        $teachers = TeacherUser::paginate(20);
        return view('livewire..admin.user-teacher-lists', compact("teachers"));
    }
}

// 
