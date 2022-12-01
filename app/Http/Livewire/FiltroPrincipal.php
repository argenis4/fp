<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\DB;

class FiltroPrincipal extends Component
{




    public function render()
    {

        $marcas = $this->marcasfp();
        $categorias = $this->categoriasfp();
        
       
        return view('livewire.filtro-principal', [
            'marcas' => $marcas,
            'categorias' => $categorias,
        ]);
    }




    public function categoriasfp()
    {

        $subcategorias = DB::connection('ds')->table('articulos')->select('subcategorias.descripcion', 'subcategorias.id')->join('descuentos', function ($join) {
            $join->on('articulos.id', '=', 'descuentos.articulo_id')
                ->where('descuentos.tipo_venta', '=', 'D',)
                ->where('descuentos.tipo_oferta', '=', 'FP');
        })->leftJoin('subcategorias', function ($join1) {

            $join1->on('subcategorias.id', '=', 'articulos.subcategoria_id');
        })->where('eliminado', 0)
            ->where('stock', '<>', 'F')
            ->where('stock', '<>', 'D')
            ->whereNotIn('articulos.imagen',  ["sinimagen.png", "perfumeria.jpg", "medicamento.jpg"])->get();


        $collection = collect($subcategorias);
        $unique = $collection->unique();
        return $unique;
    }



    public function marcasfp()
    {

        $marcas = DB::connection('ds')->table('articulos')->select('marcas.nombre', 'marcas.id')->join('descuentos', function ($join) {
            $join->on('articulos.id', '=', 'descuentos.articulo_id')
                ->where('descuentos.tipo_venta', '=', 'D',)
                ->where('descuentos.tipo_oferta', '=', 'FP');
        })->leftJoin('marcas', function ($join1) {

            $join1->on('marcas.id', '=', 'articulos.marca_id');
        })->where('eliminado', 0)
            ->where('stock', '<>', 'F')
            ->where('stock', '<>', 'D')
            ->whereNotIn('articulos.imagen',  ["sinimagen.png", "perfumeria.jpg", "medicamento.jpg"])->get();


        $collection = collect($marcas);

        $unique = $collection->unique();
        return $unique;
    }
}
