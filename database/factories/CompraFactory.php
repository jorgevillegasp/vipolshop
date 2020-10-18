<?php

namespace Database\Factories;

use App\Models\Compra;
use Illuminate\Database\Eloquent\Factories\Factory;

class CompraFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Compra::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'Proveedor_id'  =>  $faker->rand(1,20),
            'forma_de_pago' =>  $faker->rand(1,20),
            'fecha_compra'  =>  $faker->date($format = 'Y-m-d', $max = 'now'),
            'costo_compra'  =>  $faker->rand(1,100),
            'iva'           =>  $faker->rand(12,12)
        ];
    }
}
