<?php

namespace App\Models;

use App\Models\Venta;
use App\Models\Producto;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class VentaDetalle extends Model
{
    use HasFactory;

    public $table = 'venta_detalles';

    protected $fillable = [
        'producto_id',
        'venta_id',
        'cantitad',
        'costo_unidad',
        'descuento_unidad',
        'total'
    ];

    /**
     * Indicamos que este detalle de ventas le pertenece a una venta
     */
    public function venta()
    {
        return $this->belongsTo(Venta::Class);
    }

    public function producto()
    {
        return $this->belongsTo(Producto::class);
    }

}
