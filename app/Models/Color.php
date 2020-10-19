<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Color extends Model
{
    use HasFactory;

    public $table = 'colores';

    public $timestamps = false;

    public function producto(){
        return $this->belongsTo(Producto::class);
    }


}
