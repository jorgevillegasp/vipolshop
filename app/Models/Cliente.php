<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    use HasFactory;

    /**
     * Los atributos que son asignables en masa.
     *
     * @var array
     *
     * https://laravel.com/docs/8.x/eloquent#mass-assignment
     */
    protected $fillable = [
        'cliente_id',
        'sexo_id',
        'cedula',
        'nombre_primero',
        'nombre_segundo',
        'apellido_paterno',
        'apellido_materno',
        'direccion',
        'correo',
        'telefono',
        'fecha_nacimiento'
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
