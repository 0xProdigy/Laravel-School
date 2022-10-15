<?php

namespace App\View\Components\Admin;

use App\Models\Subject;
use Illuminate\View\Component;

class UserTeacherListStatus extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public $status;

    public function __construct($status)
    {
        $subject = Subject::where("id_identifier_teacher", $status)->get();
        if ($subject->count()) {
            $this->status = true;
        }else{
            $this->status = null;
        }
    }
    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components..admin.user-teacher-list-status');
    }
}
