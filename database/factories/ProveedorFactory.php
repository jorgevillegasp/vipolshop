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
            'ruc'       =>  $this->faker->randomNumber,
            'nombre'    =>  $this->faker->firstNameMale,
            'direccion' =>  $this->faker->address,
            'correo'    =>  $this->faker->email,
            'telefono'  =>  $this->faker->e164PhoneNumber,
            'deuda'     =>  $this->faker->randomDigit
        ];
    }
}
