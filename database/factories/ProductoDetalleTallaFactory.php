<?php

namespace Database\Factories;

use App\Models\ProductoDetalleTalla;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProductoDetalleTallaFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = ProductoDetalleTalla::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'talla_id'            =>  rand(1,4),
            'producto_detalle_id' =>  rand(1,30),
        ];
    }
}
