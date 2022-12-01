<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Carrito extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        
    ];


  public function carritosItems(){

    return $this->hasMany(CarritoItem::class);
}


 public function checkItems(User $user){
    return $this->carritosItems->contains('user_id', $user->id);
 }

}
