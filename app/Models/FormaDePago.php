<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FormaDePago extends Model
{
    use HasFactory;

    public $timestamps = false;

    /**
     * Indicamos que esta tabla forma_de_pagos tiene muchas ventas
     */
    public function compras()
    {
        return $this->hasMany(Compra::class);
    }

    /**
     * Indicamos que esta tabla forma_de_pagos tiene muchas compras
     */
    public function ventas()
    {
        return $this->hasMany(Venta::class);
    }
}
