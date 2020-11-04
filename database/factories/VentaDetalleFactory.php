<?php

namespace Database\Factories;

use App\Models\VentaDetalle;
use Illuminate\Database\Eloquent\Factories\Factory;

class VentaDetalleFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = VentaDetalle::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'producto_id'       =>  rand(1,20),
            'venta_id'          =>  rand(1,50),
            'cantidad'          =>  rand(1,50),
            'costo_unidad'      =>  rand(1,50),
            'descuento_unidad'  =>  rand(1,50),
            'total'             =>  rand(50,250),
        ];
    }
}
