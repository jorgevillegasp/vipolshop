<?php

namespace App\Models;

use App\Models\Talla;
use App\Models\ProductoDetalle;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class ProductoDetalleTalla extends Model
{
    use HasFactory;

    public $table = 'producto_detalle_tallas';

    /**
     * Los atributos que son asignables en masa.
     *
     * @var array
     *
     * https://laravel.com/docs/8.x/eloquent#mass-assignment
     */
    protected $fillable = [
        'talla_id',
        'producto_detalle_id',
    ];
    public $timestamps = false;

    public function talla()
    {
        return $this->belongTo(Talla::class);
    }

    public function producto_detalle()
    {
        return $this->belongTo(ProductoDetalle::class);
    }

}
