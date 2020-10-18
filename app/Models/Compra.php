<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Compra extends Model
{
    use HasFactory;

    /**
     * Le indicamos que la Ventas tiene Muchos detalles 
     */
    public function compra_detalles()
    {
        return $this->hasMany(CompraDetalle::class);
    }

    /**
     * Indicamos que esta compra le pertenece a un proveedor
     */
    public function proveedor()
    {
        return $this->belongTo(Proveedor::class);
    }
}
