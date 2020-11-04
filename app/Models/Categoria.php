<?php

namespace App\Models;

use App\Models\Producto;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Categoria extends Model
{
    use HasFactory;

    public $table = 'categorias';

    protected $fillable = [
        'categoria',
        'descripcion',
        'estado'
    ];

    /**
     * La tabla categorias tiene muchos productos
     */
    public function productos()
    {
        return $this->hasMany(Producto::class);
    }
}
