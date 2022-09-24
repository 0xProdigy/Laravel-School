<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\Salon;

use Livewire\WithPagination;

class SalonLists extends Component
{
    use WithPagination;

    protected $paginationTheme = 'bootstrap';

    public function updatingsearch()
    {
        $this->resetPage();
    }

    public function render()
    {
        $salones = Salon::paginate(10);
        return view('livewire..admin.salon-lists', compact("salones"));
    }
}
