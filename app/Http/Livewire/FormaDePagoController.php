<?php

namespace App\Http\Livewire;

use App\Models\FormaDePago;
use Livewire\Component;
use Livewire\WithPagination;

class FormaDePagoController extends Component
{
    //Para corregir el error de la paginacion cuando se elimina un registro de la tabla, no muestre el error al volver a cargar la tabla.
    use WithPagination;

    //Indicamos que vamos a usar el tema de bootstrap en la paginación. Debido a que livewire usa por defecto Tailwind
    protected $paginationTheme = 'bootstrap';

    //titulo de la pagina
    public $titulo = 'Proveedor';

    /**
     * $acción es la acción que se esta realizando en ese momento donde:
     *
     * 1 = activa el formulario de ingreso.
     * 2 = activa el formulario de edición.
     */
    public  $accion = 1;

    //Atributos de la tabla
    public $formaDePago;
    public $pago;
    public $paginacion = 8;

    public function render()
    {
        $datos = FormaDePago::orderBy('id','desc')->paginate($this->paginacion);
        return view('livewire.forma-de-pago.index',['formaDePagos' => $datos]);
    }

    public function store()
    {
        //validación campos requeridos
        $this->validate([
            'pago' => 'required'
        ]);
        //valida si existe otro pago con el mismo nombre
        $existe = FormaDePago::where('pago', $this->pago)
            ->where('id', '<>', $this->formaDePago)
            ->select('pago')
            ->get();

        if( $existe->count() > 0) {
            //imprimir mensaje de error
            $this->resetInput();
            return;
        }
        else
        {
            FormaDePago::create(['pago'=> $this->pago]);
            $this->resetInput();
        }

    }

    public function edit($id)
    {
        //Verificamos que existe
        $datos = FormaDePago::find($id);

        $this->formaDePago = $datos->id;
        $this->pago = $datos->pago;

        $this->accion = 2;

    }

    public function update()
    {
        //Verificamos que existe
        $pago = FormaDePago::find($this->formaDePago);

        //valida si existe otro pago con el mismo nombre
        $existe = FormaDePago::where('pago', $this->pago)
            ->where('id', '!=', $this->formaDePago)
            ->select('pago')
            ->get();

        if( $existe->count() > 0) {
            //imprimir mensaje de error
            $this->resetInput();
            return;
        }
        //actualizamos los cambios
        $pago->update(['pago'=> $this->pago]);


        //limpiamos los inputs
        $this->resetInput();

        //ponemos accion en 1 para que muestre el formulario de crear
        $this->accion = 1;
    }

    public function destroy($id)
    {
        FormaDePago::destroy($id);
    }

    public function resetInput()
    {
        $this->pago = '';
    }


}
