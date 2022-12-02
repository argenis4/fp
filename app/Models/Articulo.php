<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Articulo extends Model
{
    use HasFactory;

protected $connection = 'ds';

public function descuento(){

return $this->hasOne(Descuento::class,'articulo_id','local_key');

}


public function carritositem(){

return $this->hasMany(Carrito::class,'articulo_id','local_key');

}



}
