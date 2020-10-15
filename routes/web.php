<?php

use Illuminate\Support\Facades\Route;

use App\Http\Livewire\ClienteController;

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
    return view('dashboard');
})->name('dashboard');


Route::middleware(['auth:sanctum', 'verified'])->get('/cliente', ClienteController::Class);



/*
Route::resource('/compra', CompraController::class);

Route::resource('/producto', ProductoController::class);

Route::resource('/venta', VentaController::class);

Route::resource('/proveedor', ProveedorController::class);

Route::resource('/cliente', ClienteController::class);
*/

