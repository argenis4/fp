<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Carrito extends Model
{
    use HasFactory;

    protected $fillable = [
        'cantidad' .
        'precio_publico',
        'articulo_id',
        'user_id',
        'descuento_id',
        'unidad_minima',
        'categoria_id',
        'tipo_precio',
        'plazoley_dcto',
        'tipo_oferta',
        'tipo_oferta_elegida',
        'descripcion',
        'tipo_fact'
    ];


  public function carritos(){

    return $this->hasMany(Articulo::class);
}


}
