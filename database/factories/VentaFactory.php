<?php

namespace Database\Factories;

use App\Models\Venta;
use Illuminate\Database\Eloquent\Factories\Factory;

class VentaFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Venta::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'venta_detalle_id'  =>  rand(1,500),
            'cliente_id'        =>  rand(1,75),
            'fecha_venta'       =>  $this->faker->dateTime,
            'iva'               =>  rand(12,12),
            'subtotal'          =>  rand(20,50),
            'total'             =>  rand(50,120),
            'ganancia'          =>  rand(20,50),
        ];
    }
}
