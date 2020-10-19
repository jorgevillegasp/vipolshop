<?php

namespace Database\Seeders;

use App\Models\Sexo;
use App\Models\User;
use App\Models\Color;
use App\Models\Talla;
use App\Models\Venta;
use App\Models\Compra;
use App\Models\Cliente;
use App\Models\Producto;
use App\Models\Proveedor;
use App\Models\FormaDePago;
use App\Models\VentaDetalle;
use App\Models\CompraDetalle;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the \application's database.
     *
     * @return void
     */
    public function run()
    {
        User::factory(10)->create();

        Sexo::factory()->create(['sexo' => 'Masculino']);
        Sexo::factory()->create(['sexo' => 'Femenino']);

        Color::factory(20)->create();

        Talla::factory()->create(['talla' => 'small']);
        Talla::factory()->create(['talla' => 'medium']);
        Talla::factory()->create(['talla' => 'large']);
        Talla::factory()->create(['talla' => 'extra large']);

        FormaDePago::factory()->create(['pago' => 'contado']);
        FormaDePago::factory()->create(['pago' => 'credito']);

        Proveedor::factory(10)->create();

        Producto::factory(200)->create();

        Cliente::factory(75)->create();

        Venta::factory(50)->create();
        VentaDetalle::factory(500)->create();

        Compra::factory(100)->create();
        CompraDetalle::factory(100)->create();
    }
}
