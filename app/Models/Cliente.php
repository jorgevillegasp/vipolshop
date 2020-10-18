<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    use HasFactory;

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
