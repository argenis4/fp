<?php

namespace App\View\Components;

use Illuminate\View\Component;

class linkMarcas extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */

    public $marcas;

    public function __construct($marcas)
    {
    
    $this->marcas = $marcas;
 

    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.link-marcas');
    }
}
