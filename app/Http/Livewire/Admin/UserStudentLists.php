<?php

namespace App\Http\Livewire\Admin;

use App\Models\StudentUser;
use Livewire\Component;
use Livewire\WithPagination;

class UserStudentLists extends Component
{
    use WithPagination;

    protected $paginationTheme = 'bootstrap';

    public function updatingsearch()
    {
        $this->resetPage();
    }

    public function render()
    {
        $students = StudentUser::paginate(20);
        return view('livewire..admin.user-student-lists', compact('students'));
    }
}
