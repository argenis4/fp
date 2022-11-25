<?php

namespace App\View\Components;

use Illuminate\View\Component;

class carrousel extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public $publications;
    public function __construct($publications)
    {
        //
        $this->publications = $publications;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.carrousel');
    }
}
