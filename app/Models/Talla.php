<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Talla extends Model
{
    use HasFactory;

    public $timestamps = false;

    /**
     * Los atributos que son asignables en masa.
     *
     * @var array
     *
     * https://laravel.com/docs/8.x/eloquent#mass-assignment
     */
     protected $fillable = [ 'talla' ];

    public function productos(){
        return  $this->hasMany(Producto::class);
    }

    public function producto(){
        return $this->belongsTo(Producto::class);
    }

}
