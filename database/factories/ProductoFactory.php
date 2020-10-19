<?php

namespace Database\Factories;

use App\Models\Producto;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProductoFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Producto::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'talla_id'      =>  rand(1,4),
            'color_id'      =>  rand(1,20),
            'nombre'        =>  $this->faker->tld,
            'precio_venta'  =>  rand(12,50),
            'imagen'        =>  $this->faker->imageUrl($width = 640, $height = 480),
            'stock'         =>  rand(1,100),
        ];
    }
}
