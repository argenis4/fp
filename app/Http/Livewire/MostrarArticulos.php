<?php

namespace App\Http\Livewire;

use App\Models\Carrito;
use Livewire\Component;
use App\Models\Articulo;
use App\Models\CarritoItem;
use App\Models\User;
use Illuminate\Support\Arr;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MostrarArticulos extends Component


{
    public $stilus;
    public $titulo;
    public $articulo_id;
    public $descuento_id;
    public $cantidad;

    public function mount(Carrito  $carritos)
    {
    }

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


        $articulos->toArray();

        return view('livewire.mostrar-articulos', [
            'articulos' => $articulos,
            'descuento_pf' => 0.807,
            'condicion' => 14.5,
            'coef' => 1
        ]);
    }

    public function addCarrito($a, $b, $c)

    {
        $carritos = DB::table('carritos')
            ->where('user_id', '=', auth()->user()->id)->first();



        if ($carritos) {
            
             CarritoItem::create([
                   'cantidad' => 1,
                    'precio_publico' => 43456,
                    'articulo_id' => 22913,
                     'user_id' => auth()->user()->id,
                     'carrito_id'=> $carritos->id,
                    'descuento_id' => 99321884,
                    'unidad_minima' => 1,
                    'categoria_id' => 5,
                    'tipo_precio' =>"d",
                    'plazoley_dcto' => "habitual",
                    'tipo_oferta' => "j",
                    'tipo_oferta_elegida' => "f",
                    'descripcion' => "AVENO JABON X 120 GR",
                    'tipo_fact' => "s",         
             ]);

            dd();
        } else {

            $carritos = Carrito::create([
                'user_id' => auth()->user()->id,
            ]);
            
                $carritos->toArray();
             CarritoItem::create([
                   'cantidad' => 1,
                    'precio_publico' => 43456,
                    'articulo_id' => 1436,
                    'user_id' => auth()->user()->id,
                    'carrito_id'=> $carritos->id,
                    'descuento_id' => 99321884,
                    'unidad_minima' => 1,
                    'categoria_id' => 5,
                    'tipo_precio' =>"d",
                    'plazoley_dcto' => "habitual",
                    'tipo_oferta' => "j",
                    'tipo_oferta_elegida' => "f",
                    'descripcion' => "AVENO JABON X 120 GR",
                    'tipo_fact' => "s",         
             ]);
        }



        /*
             CarritoItem::create([
                   'cantidad' => $c,
                    'precio_publico' => $articulos->precio_publico,
                    'articulo_id' => $articulos->articulo_id,
                    'user_id' => auth()->user()->id,
                    'descuento_id' => $articulos->id,
                    'unidad_minima' => $articulos->unidad_minima,
                    'categoria_id' => $articulos->categoria_id,
                    'tipo_precio' => $articulos->tipo_precio,
                    'plazoley_dcto' => $articulos->plazoley_dcto,
                    'tipo_oferta' => $articulos->tipo_oferta,
                    'tipo_oferta_elegida' => $articulos->tipo_oferta_elegida,
                    'descripcion' => $articulos->descripcion,
                    'tipo_fact' => $articulos->tipo_fact,         
             ]);

           
 
            */
    }
}
