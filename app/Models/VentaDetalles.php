<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VentaDetalles extends Model
{
    use HasFactory;

    /**
     * Indicamos que este detalle de ventas le pertenece a una venta
     */
    public function venta()
    {
        return $this->belongsTo(Venta::Class);
    }

}
