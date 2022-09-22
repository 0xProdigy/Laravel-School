<?php

namespace App\Http\Livewire\Admin;

use App\Models\Section;
use Livewire\Component;
use Livewire\WithPagination;

class SectionsLists extends Component
{
    use WithPagination;

    protected $paginationTheme = 'bootstrap';

    public function updatingsearch(){
        $this->resetPage();
    }
    public function render()
    {
        $sections = Section::paginate(20);

        return view('livewire.admin.sections-lists', compact("sections"));
    }
}
