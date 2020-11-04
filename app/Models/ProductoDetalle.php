<?php

namespace App\Models;

use App\Models\Color;
use App\Models\Producto;
use App\Models\ProductoDetalleTalla;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class ProductoDetalle extends Model
{
    use HasFactory;

    public $table = 'producto_detalles';

    /**
     * Los atributos que son asignables en masa.
     *
     * @var array
     *
     * https://laravel.com/docs/8.x/eloquent#mass-assignment
     */
    protected $fillable = [
        'producto_id',
        'color_id',
        'imagen',
        'rrecio_venta',
        'stock'
    ];

    public function producto_detalle_tallas()
    {
        return $this->hasMany(ProductoDetalleTalla::Class);
    }

    public function color()
    {
        return $this->belongsTo(Color::class);
    }

    public function producto()
    {
        return $this->belongsTo(Producto::class);
    }


}
