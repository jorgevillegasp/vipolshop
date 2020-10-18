<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        
        \App\Models\Sexo::factory()->create(['sexo'=>'Masculino']);
        \App\Models\Sexo::factory()->create(['sexo'=>'Femenino']);

        \App\Models\Talla::factory()->create(['talla'=>'small']);
        \App\Models\Talla::factory()->create(['talla'=>'medium']);
        \App\Models\Talla::factory()->create(['talla'=>'large']);
        \App\Models\Talla::factory()->create(['talla'=>'extra large']);

        \App\Models\FormaDePago::factory()->create(['pago'=>'contado']);
        \App\Models\FormaDePago::factory()->create(['pago'=>'credito']);
        


        \App\Models\Producto::factory(200)->create();

        \App\Models\Color::factory(20)->create();

        \App\Models\Venta::factory(100)->create();
        \App\Models\VentaDetalle::factory(100)->create();

        \App\Models\Compra::factory(100)->create();
        \App\Models\CompraDetalle::factory(100)->create();

        \App\Models\Cliente::factory(100)->create();

        \App\Models\Proveedor::factory(100)->create();
        


        
        \App\Models\User::factory(10)->create();
    }
}
