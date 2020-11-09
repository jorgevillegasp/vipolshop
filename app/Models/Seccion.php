<?php

namespace App\Models;
use App\Models\Categoria;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Seccion extends Model
{
    use HasFactory;
    protected $table = "secciones";

    public $fillable = [
        'seccion',
        'descripcion'
    ];

    /**
     * Indicamos que este producto tiene muchos detalles
     */
    public function categorias(){
        return  $this->hasMany(Categoria::class);
    }
}
