<?php

use Illuminate\Support\Facades\Route;

use App\Http\Livewire\ClienteController;
use App\Http\Livewire\ProveedorController;

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

Route::middleware(['auth:sanctum', 'verified'])->group(function () {

    Route::get('/cliente', ClienteController::Class);

    Route::get('/proveedor', ProveedorController::Class);

});



