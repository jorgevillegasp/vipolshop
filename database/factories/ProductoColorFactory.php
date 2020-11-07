<?php

namespace Database\Factories;

use App\Models\ProductoColor;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProductoColorFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = ProductoColor::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'producto_id'   =>  rand(1,20),
            'color_id'      =>  rand(1,10),
            'imagen_url'    =>  $this->faker->imageUrl($width = 640, $height = 480),
            'stock'         =>  rand(1,100)
        ];
    }
}
