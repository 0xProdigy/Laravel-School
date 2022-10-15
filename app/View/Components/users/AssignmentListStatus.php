<?php

namespace App\View\Components\Users;

use Illuminate\View\Component;

class AssignmentListStatus extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */

    public $status;
    public function __construct($status)
    {
        //
        $this->status = $status;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components..users.assignment-list-status');
    }
}
