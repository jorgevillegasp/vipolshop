<?php

namespace App\Models;

use App\Models\Sexo;
use App\Models\Venta;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Cliente extends Model
{
    use HasFactory;

    public $table = 'clientes';

    /**
     * Los atributos que son asignables en masa.
     *
     * @var array
     *
     * https://laravel.com/docs/8.x/eloquent#mass-assignment
     */
    protected $fillable = [
        'sexo_id',
        'cedula',
        'nombre_primero',
        'nombre_segundo',
        'apellido_paterno',
        'apellido_materno',
        'direccion',
        'correo',
        'telefono',
        'fecha_nacimiento',
        'deuda'
    ];

    /**
     * La Tabla clientes tiene muchas ventas
     */
    public function ventas()
    {
        return $this->hasMany(Venta::class);
    }

    /**
     * La tabla Clientes pertenece a un sexo
     */

    public function sexo()
    {
        return $this->belongsTo(Sexo::class);
    }

}
