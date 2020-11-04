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
            'proveedor_id'      =>  rand(1,10),
            'fecha_compra'      =>  $this->faker->dateTime,
            'costo_compra'      =>  rand(1,50),
            'iva'               =>  rand(1,5)
        ];
    }
}
