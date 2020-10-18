<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Proveedor extends Model
{
    use HasFactory;

    /**
     * Indicamos que este Proveedor tiene muchas Compras
     */
    public function compras()
    {
        return $this->hasMany(Compra::class);
    }
}
