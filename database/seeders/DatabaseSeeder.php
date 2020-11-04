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
use App\Models\ProductoDetalle;
use App\Models\ProductoDetalleTalla;
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

        Color::factory(10)->create();

        Talla::factory()->create(['talla' => 'small']);
        Talla::factory()->create(['talla' => 'medium']);
        Talla::factory()->create(['talla' => 'large']);
        Talla::factory()->create(['talla' => 'extra large']);

        ProductoDetalle::factory(30)->create();
        ProductoDetalleTalla::factory(50)->create();

        FormaDePago::factory()->create(['pago' => 'contado']);
        FormaDePago::factory()->create(['pago' => 'credito']);

        Proveedor::factory(10)->create();

        FormaDePago::factory()->create(['categoria'     => 'Pantalones',
                                        'descripcion'   => 'descripcion de la categoria 0001' ,
                                        'estado'        => true,]);
        FormaDePago::factory()->create(['categoria'     => 'Bluzas',
                                        'descripcion'   => 'descripcion de la categoria 0002' ,
                                        'estado'        => true,]);

        Producto::factory(20)->create();

        Cliente::factory(75)->create();

        Venta::factory(50)->create();
        VentaDetalle::factory(500)->create();

        Compra::factory(100)->create();

        

        

        

        


    }
}
