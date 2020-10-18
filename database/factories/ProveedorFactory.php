<?php

namespace Database\Factories;

use App\Models\Proveedor;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProveedorFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Proveedor::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'sexo_id'  =>  $faker->rand(1,2),
            'nombre_primero'  =>  $faker->firstNameMale,
            'direccion'  =>  $faker->address,
            'correo'  =>  $faker->email,
            'telefono'  =>  $faker->e164PhoneNumber,
            'deuda'  =>  $faker->rand(1,500),
        ];
    }
}
