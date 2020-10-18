<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    use HasFactory;

    /**
     * Indicamos que este producto tiene muchas detalles de compra
     */
    public function compra_detalles(){
        return  $this->hasMany(Producto::class);
    }

    /**
     * Indicamos que este producto pertenece a una talla
     */
    public function tallas(){
        return $this->belongsTo(Talla::class);
    }

    /**
     * Indicamos que este producto pertenece a un color
     */
    public function colores(){
        return $this->belongsTo(Color::class);
    }

}
