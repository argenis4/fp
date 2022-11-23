<?php

namespace App\View\Components;

use Illuminate\View\Component;

class PrincipalLayout extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
          return view('layouts.principal-layout');
       
    }
}
