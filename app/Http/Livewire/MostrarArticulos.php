<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\DB;

class MostrarArticulos extends Component


{
    public $stilus;
      public $titulo;
    public function render()
    {
        $articulos = DB::connection('ds')->table('articulos')->join('descuentos', function ($join) {
            $join->on('articulos.id', '=', 'descuentos.articulo_id')
                ->where('descuentos.tipo_venta', '=', 'D',)
                ->where('descuentos.tipo_oferta', '=', 'FP');
        })->where('eliminado', 0)
            ->where('stock', '<>', 'F')
            ->where('stock', '<>', 'D')
            ->whereNotIn('imagen',  ["sinimagen.png", "perfumeria.jpg", "medicamento.jpg"])->get();

        return view('livewire.mostrar-articulos', [
            'articulos' => $articulos,
            'descuento_pf' => 0.807,
            'condicion' => 14.5,
            'coef' => 1
        ]);
    }
}
