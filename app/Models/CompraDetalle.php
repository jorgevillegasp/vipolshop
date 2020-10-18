<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CompraDetalle extends Model
{
    use HasFactory;

    /**
     * Indicamos que este este detalle de compra le pertenece a una compra
     */
    public function compra()
    {
        return $this->belongsTo(Compra::Class);
    }
}
