<?php

namespace App\Models;

use App\Models\ProductoDetalle;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Color extends Model
{
    use HasFactory;

    public $table = 'colores';
    /**
     * Los atributos que son asignables en masa.
     *
     * @var array
     *
     * https://laravel.com/docs/8.x/eloquent#mass-assignment
     */
    protected $fillable = [ 'color' ];


    public $timestamps = false;

    public function producto_detalles(){
        return $this->belongsTo(ProductoDetalle::class);
    }


}
