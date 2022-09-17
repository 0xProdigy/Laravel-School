<?php

namespace App\View\Components\content-navigation-system;

use Illuminate\View\Component;

class DialogHelp extends Component
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
        return view('components..content-navigation-system.dialog-help');
    }
}
