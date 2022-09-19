<?php

namespace App\Http\Livewire\Admin;

use App\Models\Period;
use Livewire\Component;

use Livewire\WithPagination;

class PeriodLists extends Component
{ 
    use WithPagination;

    protected $paginationTheme = 'bootstrap';

    public function updatingsearch(){
        $this->resetPage();
    }

    public function render()
    {
        $periods = Period::paginate(2);

        return view('livewire.admin.period-lists', compact("periods"));
    }
}
