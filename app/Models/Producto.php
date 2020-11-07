<?php

namespace App\Models;

use App\Models\Categoria;
use App\Models\VentaDetalle;
use App\Models\CompraDetalle;
use App\Models\ProductoDetalle;
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
        'categoria_id',
        'nombre',
        'imagen',
        'estado'
    ];


    /**
     * Indicamos que este producto tiene muchos detalles
     */
    public function producto_detalles(){
        return  $this->hasMany(ProductoDetalle::class);
    }

    /**
     * Indicamos que este producto tiene muchas detalles compras
     */
    public function compra_detalles(){
        return  $this->hasMany(CompraDetalle::class);
    }

    /**
     * Indicamos que este producto tiene muchos detalles de ventas
     */
    public function venta_detalles(){
        return  $this->hasMany(VentaDetalle::class);
    }

    /**
     * Indicamos que este producto pertenece a una categoría
     */
    public function categoria(){
        return $this->belongsTo(Categoria::class);
    }


}
