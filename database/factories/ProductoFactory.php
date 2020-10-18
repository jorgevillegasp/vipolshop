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
            'talla_id'  =>  $faker->rand(1,4),
            'color_id'  =>  $faker->rand(1,20),
            'nombre'  =>  $faker->tld,
            'precio_venta'  =>  $faker->rand(12,50),
            'imagen'  =>  $faker->imageUrl($width = 640, $height = 480),
            'stock'  =>  $faker->rand(1,100),
        ];
    }
}
