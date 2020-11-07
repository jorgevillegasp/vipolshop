<?php

namespace App\Models;

use App\Models\Color;
use App\Models\ProductoColorTalla;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class ProductoColor extends Model
{
    use HasFactory;

    public $table = 'producto_colores';

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
        'stock'
    ];

    public function producto_color_tallas()
    {
        return $this->hasMany(ProductoColorTalla::Class);
    }

    public function color()
    {
        return $this->belongsTo(Color::class);
    }
}
