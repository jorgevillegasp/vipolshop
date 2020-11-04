<?php

namespace App\Models;

use App\Models\Color;
use App\Models\Talla;
use App\Models\VentaDetalle;
use App\Models\CompraDetalle;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Producto extends Model
{
    use HasFactory;


    public $table = 'productos';

    /**
     * Los atributos que son asignables en masa.
     *
     * @var array
     *
     * https://laravel.com/docs/8.x/eloquent#mass-assignment
     */
    protected $fillable = [
        'talla_id',
        'color_id',
        'nombre',
        'precio_venta',
        'imagen',
        'stock'
    ];


    /**
     * Indicamos que este producto tiene muchas detalles de compra
     */
    public function compra_detalles(){
        return  $this->hasMany(CompraDetalle::class);
    }

    /**
     * Indicamos que este producto tiene muchas detalles de ventas
     */
    public function venta_detalles(){
        return  $this->hasMany(VentaDetalle::class);
    }

    /**
     * Indicamos que este producto pertenece a una talla
     */
    public function tallas(){
        return $this->belongsTo(Talla::class);
    }

    /**
     * Indicamos que este producto pertenece a un color
     */
    public function colores(){
        return $this->belongsTo(Color::class);
    }

}
