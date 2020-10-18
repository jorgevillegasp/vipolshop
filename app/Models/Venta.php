<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Venta extends Model
{
    use HasFactory;

    /**
     * Le indicamos que la tabla Ventas tiene Muchos detalles 
     */
    public function venta_detalles()
    {
        return $this->hasMany(VentaDetalle::class);
    }

    /**
     * Indicamos que esta tabla venta le pertenece a un cliente
     */
    public function cliente()
    {
        return $this->belongTo(Cliente::class);
    }
}
