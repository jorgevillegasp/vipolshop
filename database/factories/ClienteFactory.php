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
            'sexo_id'         =>  rand(1,2),
            'cedula'          =>  $this->faker->randomNumber,
            'nombre_primero'  =>  $this->faker->firstName,
            'nombre_segundo'  =>  $this->faker->firstName,
            'apellido_paterno'=>  $this->faker->lastName,
            'apellido_materno'=>  $this->faker->lastName,
            'direccion'       =>  $this->faker->address,
            'correo'          =>  $this->faker->email,
            'telefono'        =>  $this->faker->e164PhoneNumber,
            'fecha_nacimiento'=>  $this->faker->date($format = 'Y-m-d', $max = 'now'),
            'deuda'           =>  rand(1,250),
        ];
    }
}
