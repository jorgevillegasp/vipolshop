<?php

use Illuminate\Support\Facades\Route;

use App\Http\Livewire\ColorController;
use App\Http\Livewire\TallaController;
use App\Http\Livewire\ClienteController;
use App\Http\Livewire\ProductoController;
use App\Http\Livewire\CategoriaController;
use App\Http\Livewire\ProveedorController;
use App\Http\Livewire\FormaDePagoController;


/*
|--------------------------------------------------------------------------
| Rutas web
|------------------------------------------------- -------------------------
|
| Aquí es donde puede registrar rutas web para su aplicación. Estas
| RouteServiceProvider carga las rutas dentro de un grupo que
| contiene el grupo de middleware "web". ¡Ahora crea algo genial!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('clientes');
})->name('dashboard');

Route::middleware(['auth:sanctum', 'verified'])->group(function () {

    Route::get('/colores', ColorController::Class);

    Route::get('/tallas', TallaController::Class);

    Route::get('/formas-pagos', FormaDePagoController::Class);

    Route::get('/proveedores', ProveedorController::Class);

    Route::get('/clientes', ClienteController::Class);

    Route::get('/productos', ProductoController::Class);

    Route::get('/categorias', CategoriaController::Class);


});



