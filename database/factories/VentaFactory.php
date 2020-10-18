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
            'venta_detalle_id'  =>  $faker->rand(1,100),
            'cliente_id'        =>  $faker->rand(1,100),
            'forma_de_pago_id'  =>  $faker->rand(1,100),
            'fecha_venta'       =>  $faker->rand(1,100),
            'iva'               =>  $faker->rand(12,12),
            'subtotal'          =>  $faker->rand(20,50),
            'total'             =>  $faker->rand(50,120)
        ];
    }
}
