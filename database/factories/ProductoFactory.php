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
            'categoria_id'  =>  rand(1,2),
            'nombre'        =>  $this->faker->tld,
            'precio_venta'  =>  rand(1,50),
            'imagen_url'    =>  $this->faker->imageUrl($width = 640, $height = 480),
            'descripcion'   =>  $this->faker->text($maxNbChars = 200),
            'estado'        =>  true,
        ];
    }
}
