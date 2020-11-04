<?php

namespace App\Models;

use App\Models\Proveedor;
use App\Models\CompraDetalle;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Compra extends Model
{
    use HasFactory;

    public $table = 'compras';

    protected $fillable = [
        'proveedor_id',
        'fecha_compra',
        'costo_compra',
        'iva'
    ];

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
