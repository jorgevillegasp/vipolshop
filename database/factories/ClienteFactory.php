<?php

namespace Database\Factories;

use App\Models\Cliente;
use Illuminate\Database\Eloquent\Factories\Factory;

class ClienteFactory extends Factory
{
    /**
     * El nombre del modelo correspondiente de la fábrica.
     *
     * @var string
     */
    protected $model = Cliente::class;

    /**
     * Defina el estado predeterminado del modelo.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'sexo_id'  =>  $faker->rand(1,2),
            'nombre_primero'  =>  $faker->firstNameMale ,
            'nombre_segundo'  =>  $faker->firstNameMale ,
            'apellido_paterno'  =>  $faker->lastName ,
            'apellido_materno'  =>  $faker->lastName ,
            'direccion'  =>  $faker->address,
            'correo'  =>  $faker->email,
            'telefono'  =>  $faker->e164PhoneNumber,
            'fecha_nacimiento'  =>  $faker->date($format = 'Y-m-d', $max = 'now'),
            'deuda'  =>  $faker->rand(1,500),
        ];
    }
}
