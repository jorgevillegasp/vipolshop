<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sexo extends Model
{
    use HasFactory;

    public $timestamps = false;

    public $table = 'sexos';

    /**
     * Los atributos que son asignables en masa.
     *
     * @var array
     *
     * https://laravel.com/docs/8.x/eloquent#mass-assignment
     */
    protected $fillable = [ 'sexo' ];


    /**
     * La tabla sexo tiene muchos clientes
     */
    public function clientes()
    {
        return $this->hasMany(Cliente::class);
    }
}
