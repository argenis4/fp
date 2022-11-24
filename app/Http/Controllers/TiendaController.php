<?php

namespace App\Http\Controllers;

use App\Models\Marca;
use App\Models\Categoria;
use App\Models\Provincia;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TiendaController extends Controller
{
    //

    public function index()
    {
        $provincias = Provincia::all();
        $categorias = Categoria::all();
        $marcas = Marca::all();

      


        return view('tienda', [
            'provincias' => $provincias,
            'categorias' => $categorias,
            'marcas' => $marcas,
        ]);
    }
}
