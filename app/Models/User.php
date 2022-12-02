<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'telefono',
        'provincia',
        'localidad',
        'direccion',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
     

     public function carritos()
     {
    return $this->hasOne(Carrito::class);
     }

          public function carritositems()
     {
    return $this->hasMany(CarritoItem::class);
     }


          public function buscarArticulo($articulo)
     {
        return $this->carritos->carritositems->contains('articulo_id', $articulo);
     }

        //esta funcion es provisoria debo buscar la forma de mostrar los datos.
      public function articulosCarrito($articulo)
     {   $cantidad = CarritoItem::select('cantidad')->whereIn('articulo_id', [$articulo])->get();
    return $cantidad;
     }


}
