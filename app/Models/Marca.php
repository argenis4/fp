<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Marca extends Model
{
    use HasFactory;
    
   protected $connection = 'ds';

public function marca(){

return $this->hasMany(Articulo::class);

}

}
