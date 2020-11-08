<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Producto;
use App\Models\Categoria;
use App\Models\ProductoDetalle;
use App\Models\ProductoDetalleTalla;

class CategoriaController extends Component
{
    public function render()
    {
        $record = Categoria::all();

        return view('livewire.categoria.index',[
            'productos' => $record
            ]);
    }
}
