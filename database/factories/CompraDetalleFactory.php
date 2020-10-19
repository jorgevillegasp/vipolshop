<?php

namespace Database\Factories;

use App\Models\CompraDetalle;
use Illuminate\Database\Eloquent\Factories\Factory;

class CompraDetalleFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = CompraDetalle::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'compra_id'    =>  rand(1,20),
            'producto_id'  =>  rand(1,100),
            'cantidad'     =>  rand(1,50),
            'valor_unidad' =>  rand(1,100),
            'total'        =>  rand(50,250)
        ];
    }
}
