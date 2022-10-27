<?php

namespace App\View\Components\ContentDashboard;

use App\Models\AdminUser;
use App\Models\StudentUser;
use App\Models\TeacherUser;
use Illuminate\View\Component;

class RegisterIcon extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        $admin = count(AdminUser::all());
        $teacher = count(TeacherUser::all());
        $student = count(StudentUser::all());
        return view('components..content-dashboard.register-icon', compact("admin","teacher","student"));
    }
}
