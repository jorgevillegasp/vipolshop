<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Proveedor extends Model
{
    use HasFactory;

    public $table = 'proveedores';

    /**
     * Los atributos que son asignables en masa.
     *
     * @var array
     *
     * https://laravel.com/docs/8.x/eloquent#mass-assignment
     */
    protected $fillable = [
        'ruc',
        'nombre',
        'direccion',
        'correo',
        'telefono',
        'deuda',
    ];

    /**
     * Indicamos que este Proveedor tiene muchas Compras
     */
    public function compras()
    {
        return $this->hasMany(Compra::class);
    }
}
