<?php

namespace Database\Factories;

use App\Models\ProductoDetalle;
use Illuminate\Database\Eloquent\Factories\Factory;

class Producto_DetallesFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = ProductoDetalle::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'producto_id'   =>  rand(1,200),
            'color_id'      =>  rand(1,10),
            'imagen'        =>  $this->faker->imageUrl($width = 640, $height = 480),
            'precio_venta'  =>  rand(12,50),
            'stock'         =>  rand(1,100)
        ];
    }
}
