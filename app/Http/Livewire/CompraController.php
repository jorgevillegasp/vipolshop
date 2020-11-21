<?php

namespace App\Http\Livewire;

use App\Models\Compra;
use App\Models\Proveedor;
use Livewire\Component;
use Livewire\WithPagination;

class CompraController extends Component
{
    //Para corregir el error de la paginacion cuando se elimina un registro de la tabla, no muestre el error al volver a cargar la tabla.
    use WithPagination;

    //Indicamos que vamos a usar el tema de bootstrap en la paginación. Debido a que livewire usa por defecto Tailwind
    protected $paginationTheme = 'bootstrap';

    //titulo de la pagina
    public $titulo = 'compra';

    /**
     * $acción es la acción que se esta realizando en ese momento donde:
     *
     * 1 = activa el formulario de ingreso.
     * 2 = activa el formulario de edición.
     */
    public  $action = 1;

    //Atributos de la tabla compras
    public $compra_id;
    public $proveedor_id;
    public $fecha_compra;
    public $costo_compra;
    public $iva;

    //Atributos de la tabla compra_detalles
    public $compra_detalle_id;
    public $producto_id;
    public $cantidad;
    public $valor_unidad;
    public $total;

    //Para la busqueda
    public $search;

    //paginacion
    public $pagination = 10;

    public function render()
    {
        if(strlen($this->search) > 0)
        {
            $record = Compra::leftjoin('proveedores as p','p.id','compras.proveedor_id')
                        ->select('compras.*','p.nombre as proveedor')
                        ->where('compras.id', 'like', '%' .  $this->search . '%')
                        ->orWhere('compras.fecha_compra', 'like', '%' .  $this->search . '%')
                        ->orWhere('compras.costo_compra', 'like', '%' .  $this->search . '%')
                        ->orWhere('compras.iva', 'like', '%' .  $this->search . '%')
                        ->orWhere('p.nombre', 'like', '%' .  $this->search . '%')
                        ->paginate($this->pagination);

            return view(
                'livewire.compra.index',
                ['compras' => $record]
            );

        }
        else {

            $record = Compra::leftjoin('proveedores as p','p.id','compras.proveedor_id')
                        ->select('compras.*','p.nombre as proveedor')
                        ->orderBy('id','desc')
                        ->paginate($this->pagination);

            return view(
                'livewire.compra.index',
                ['compras' => $record]
            );
        }
    }

    public function edit($id)
    {
        //Verificamos que existe
        $datos = Compra::find($id);

        $this->compra_id     = $datos->id;
        $this->proveedor_id  = $datos->proveddor_id;
        $this->fecha_compra  = $datos->fecha_compra;
        $this->costo_compra  = $datos->costo_compra;
        $this->iva           = $datos->iva;
        /*
        //obtener los datos de los detalles de la compra
        $record = CompraDetalles::select('compra_detalles.*')
                                ->where('compra_detalles.compras_id','compras.id')
                                ->ordeBy('id','desc');
        */
        $this->accion = 3;
    }

    /**
    * Elimina el recurso especificado del almacenamiento.
    */
    public function destroy($id)
    {
        Compra::destroy($id);
    }
}
