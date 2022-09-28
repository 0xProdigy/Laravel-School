<?php

namespace App\Http\Livewire\Admin;

use App\Models\AdminUser;
use Livewire\Component;
use Livewire\WithPagination;

class UserAdminLists extends Component
{
    use WithPagination;

    protected $paginationTheme = 'bootstrap';

    public function updatingsearch()
    {
        $this->resetPage();
    }

    public function render()
    {
        $users = AdminUser::paginate(20);
        return view('livewire..admin.user-admin-lists', compact('users'));
    }
}
