<?php

namespace App\Http\Livewire;

use App\Models\User;
use App\Models\Carrito;
use Livewire\Component;
use App\Models\Articulo;
use App\Models\Descuento;
use App\Models\CarritoItem;
use Illuminate\Support\Arr;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MostrarArticulos extends Component


{
    public $stilus;
    public $titulo;
    public $articulo_id;
    public $descuento_id;
    public $users;
    public $cantidadmodificada;
 

    public function mount()
    {
    }

    public function render(User $users)
    {
        $articulos = DB::connection('ds')->table('articulos')->where('stock', '<>', 'F')
            ->where('stock', '<>', 'D')
            ->whereNotIn('imagen',  ["sinimagen.png", "perfumeria.jpg", "medicamento.jpg"])

            ->leftJoin('descuentos', 'articulos.id', '=', 'descuentos.articulo_id')
            /*
        ->join('descuentos', function ($join) {
            $join->on('articulos.id', '=', 'descuentos.articulo_id')
                ->where('descuentos.tipo_venta', '=', 'D',)
                ->where('descuentos.tipo_oferta', '=', 'FP');
        })
        */
            ->where('descuentos.tipo_venta', '=', 'D',)
            ->where('descuentos.tipo_oferta', '=', 'FP')
            ->where('eliminado', 0)
            ->get();


        $articulos->toArray();


        return view('livewire.mostrar-articulos', [
            'articulos' => $articulos,
            'descuento_pf' => 0.807,
            'condicion' => 14.5,
            'coef' => 1
        ]);
    }

    public function addCarrito(Articulo $articulos, Descuento $descuentos, $cant)
    {
        $carritos = DB::table('carritos')
            ->where('user_id', '=', auth()->user()->id)->first();

        if ($carritos) {
                if($articulos->carritositem->contains('articulo_id', $articulos->id)){


                }else{

                    CarritoItem::create([
                'cantidad' => $cant,
                'precio_publico' => $articulos->precio_publico,
                'articulo_id' => $articulos->id,
                'user_id' => auth()->user()->id,
                'carrito_id' => $carritos->id,
                'descuento_id' => $descuentos->id,
                'unidad_minima' => $descuentos->uni_min,
                'categoria_id' => $articulos->categoria_id,
                'tipo_precio' => $descuentos->tipo_precio,
                'plazoley_dcto' => $descuentos->plazo,
                'tipo_oferta' => $descuentos->tipo_oferta,
                'tipo_oferta_elegida' => "f",
                'descripcion' => $articulos->descripcion_pag,
                'tipo_fact' => "s",
            ]);

                }
            


            
        } else {

            $carritos = Carrito::create([
                'user_id' => auth()->user()->id,
            ]);

            $carritos->toArray();
            CarritoItem::create([
                'cantidad' => $cant,
                'precio_publico' => $articulos->precio_publico,
                'articulo_id' => $articulos->id,
                'user_id' => auth()->user()->id,
                'carrito_id' => $carritos->id,
                'descuento_id' => $descuentos->id,
                'unidad_minima' => $descuentos->uni_min,
                'categoria_id' => $articulos->categoria_id,
                'tipo_precio' => $descuentos->tipo_precio,
                'plazoley_dcto' => $descuentos->plazo,
                'tipo_oferta' => $descuentos->tipo_oferta,
                'tipo_oferta_elegida' => "f",
                'descripcion' => $articulos->descripcion_pag,
                'tipo_fact' => "s",
            ]);
        }
    }


    function increment($cantidad)
    {
           
        $cantidad++;
         $this->cantidadmodificada =   $cantidad;
    }

    function decrement($cantidad)
    {
         
        $cantidad--;
                $this->cantidadmodificada =   $cantidad;
    }
}
