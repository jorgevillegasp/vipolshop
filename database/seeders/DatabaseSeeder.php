<?php

namespace Database\Seeders;

use App\Models\Categoria;
use App\Models\Sexo;
use App\Models\User;
use App\Models\Color;
use App\Models\Talla;
use App\Models\Venta;
use App\Models\Compra;
use App\Models\Cliente;
use App\Models\CompraDetalle;
use App\Models\Producto;
use App\Models\Proveedor;
use App\Models\VentaDetalle;
use Database\Factories\ProductoColorFactory;
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

        Categoria::factory()->create(['categoria'   => 'Pantalones',
                                    'descripcion'   => 'descripcion de la categoria 0001' ,
                                    'estado'        => true,]);
        Categoria::factory()->create(['categoria'   => 'Bluzas',
                                    'descripcion'   => 'descripcion de la categoria 0002' ,
                                    'estado'        => true,]);

        Color::factory(10)->create();

        Producto::factory(20)->create();

        Talla::factory()->create(['talla' => 'small']);
        Talla::factory()->create(['talla' => 'medium']);
        Talla::factory()->create(['talla' => 'large']);
        Talla::factory()->create(['talla' => 'extra large']);

        ProductoColor::factory(30)->create();

        ProductoColorTalla::factory(50)->create();

        Proveedor::factory(10)->create();

        Sexo::factory()->create(['sexo' => 'Masculino']);
        Sexo::factory()->create(['sexo' => 'Femenino']);

        Cliente::factory(75)->create();

        Venta::factory(50)->create();

        VentaDetalle::factory(500)->create();

        Compra::factory(100)->create();

        CompraDetalle::factory(30)->create();
    }
}
