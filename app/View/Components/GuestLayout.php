<?php

namespace App\View\Components;

use Illuminate\View\Component;

class GuestLayout extends Component
{
    /**
     * Get the view / contents that represents the component.
     *
     * @return \Illuminate\View\View
     */
public $categorias;
public $marcas;
    public function __construct($categorias,$marcas)
    {
        $this->categorias= $categorias;
          $this-> marcas = $marcas;
    }

    public function render()
    {
        return view('layouts.guest');
    }
}
