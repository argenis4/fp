<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CarritoItem extends Model
{
    use HasFactory;

        protected $fillable = [
        'carrito_id',
        'cantidad',
        'user_id',
        'articulo_id',
        'precio_publico',
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

 public function articulos(){
    return $this->hasMany(Articulo::class,'id','articulo_id');


 }




/*
 public function carrito(){
    return $this->hasMany(Carrito::class);  
 }
 
 */
  




}
