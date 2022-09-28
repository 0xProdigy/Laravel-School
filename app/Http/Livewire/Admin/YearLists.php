<?php

namespace App\Http\Livewire\Admin;

use App\Models\SchoolYear;
use Livewire\Component;
use Livewire\WithPagination;

class YearLists extends Component
{
    
    use WithPagination;

    protected $paginationTheme = 'bootstrap';

    public function updatingsearch()
    {
        $this->resetPage();
    }

    public function render()
    {
        $years = SchoolYear::paginate(20);
        return view('livewire..admin.year-lists', compact('years'));
    }
}
