<?php

namespace App\Http\Controllers;

use App\Models\Marca;
use App\Models\Provincia;
use Illuminate\Support\Arr;
use App\Models\subcategoria;
use Illuminate\Http\Request;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\DB;

class TiendaController extends Controller
{
    //

    public function index()
    {
        $provincias = Provincia::all();
        $categorias =  $this->categoriasfp();
        $marcas =     $this->marcasfp();
          $descuentosfp =     $this->descuentosfp();
/*
        $publications = DB::connection('ds')->table('publications')->select('imagen')
            ->where('habilitada', '=', 1)
            ->where('ubicacion', '=', 14)->get();
*/

        return view('tienda', [
            'provincias' => $provincias,
            'categorias' => $categorias,
            'marcas' => $marcas,
       //     'publications' => $publications,
              'descuentosfp' => $descuentosfp,
        ]);
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


      public function descuentosfp()
    {
         $articulos = DB::connection('ds')->table('articulos')->select('descuentos.uni_min','descuentos.dto_drogueria')->join('descuentos', function ($join) {
            $join->on('articulos.id', '=', 'descuentos.articulo_id')
                ->where('descuentos.tipo_venta', '=', 'D',)
                ->where('descuentos.tipo_oferta', '=', 'FP');
        })->where('eliminado', 0)
            ->where('stock', '<>', 'F')
            ->where('stock', '<>', 'D')
            ->whereNotIn('imagen',  ["sinimagen.png", "perfumeria.jpg", "medicamento.jpg"])->orderBy('descuentos.dto_drogueria','asc')->get();
                $collection = collect($articulos);
        $unique = $collection->unique();
        return $unique;
    }
}
