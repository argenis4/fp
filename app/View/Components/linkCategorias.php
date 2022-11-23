<?php

namespace App\View\Components;

use Illuminate\View\Component;

class linkCategorias extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */

    public $categorias;

    public function __construct($categorias)
    {
    
    $this->categorias = $categorias;
 

    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.link-categorias');
    }
}
