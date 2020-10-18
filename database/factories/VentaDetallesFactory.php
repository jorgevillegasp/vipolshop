<?php

namespace Database\Factories;

use App\Models\VentaDetalles;
use Illuminate\Database\Eloquent\Factories\Factory;

class VentaDetallesFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = VentaDetalles::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'producto_id'  =>  $faker->rand(1,200),
            'venta_id'  =>  $faker->rand(1,100),
            'cantidad'  =>  $faker->rand(1,50),
            'costo_unidad'  =>  $faker->rand(1,100),
            'total'  =>  $faker->rand(50,250)
        ];
    }
}
