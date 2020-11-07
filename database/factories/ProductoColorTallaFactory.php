<?php

namespace Database\Factories;

use App\Models\ProductoColorTalla;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProductoColorTallaFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = ProductoColorTalla::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'talla_id'          =>  rand(1,4),
            'producto_color_id' =>  rand(1,30),
        ];
    }
}
