<?php

namespace App\Models;

use App\Models\Compra;
use App\Models\Producto;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CompraDetalle extends Model
{
    use HasFactory;

    public $fillable = [
        'compra_id',
        'producto_id',
        'cantidad',
        'valor_unidad',
        'total'
    ];
    /**
     * Indicamos que este este detalle de compra le pertenece a una compra
     */
    public function compra()
    {
        return $this->belongsTo(Compra::Class);
    }
    public function producto()
    {
        return $this->belogsTo(Producto::class);
    }
}
