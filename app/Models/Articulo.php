<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Articulo extends Model
{
    use HasFactory;

protected $connection = 'ds';

public function descuento(){

return $this->hasMany(Descuento::class, 'articulo_id');

}
}
