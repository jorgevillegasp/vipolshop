<?php

namespace App\Models;

use App\Models\ProductoDetalleTalla;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Talla extends Model
{
    use HasFactory;

    public $timestamps = false;

    public $table = 'tallas';

    /**
     * Los atributos que son asignables en masa.
     *
     * @var array
     *
     * https://laravel.com/docs/8.x/eloquent#mass-assignment
     */
    protected $fillable = [ 'talla' ];

    public function producto_detalle_talla(){
        return  $this->hasMany(ProductoDetalleTalla::class);
    }

}
