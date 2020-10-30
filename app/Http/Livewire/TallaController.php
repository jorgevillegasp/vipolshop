<?php

namespace App\Http\Livewire;

use App\Models\Talla;
use Livewire\Component;
use Livewire\WithPagination;

class TallaController extends Component
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
    public $talla_id;
    public $talla;
    public $paginacion = 8;

    public function render()
    {
        $datos = Talla::orderBy('id','desc')->paginate($this->paginacion);
        return view('livewire.talla.index',['tallas' => $datos]);
    }

    public function store()
    {
        //validación campos requeridos
        $this->validate([
            'talla' => 'required'
        ]);
        //valida si existe otro talla con el mismo nombre
        $existe = Talla::where('talla', $this->talla)
            ->where('id', '<>', $this->talla_id)
            ->select('talla')
            ->get();

        if( $existe->count() > 0) {
            //imprimir mensaje de error
            $this->resetInput();
            return;
        }
        else
        {
            Talla::create(['talla'=> $this->talla]);
            $this->resetInput();
        }

    }

    public function edit($id)
    {
        //Verificamos que existe
        $datos = Talla::find($id);

        $this->talla_id = $datos->id;
        $this->talla = $datos->talla;

        $this->accion = 2;

    }

    public function update()
    {
        //Verificamos que existe
        $talla = Talla::find($this->talla_id);

        //valida si existe otro talla con el mismo nombre
        $existe = Talla::where('talla', $this->talla)
            ->where('id', '!=', $this->talla_id)
            ->select('talla')
            ->get();

        if( $existe->count() > 0) {
            //imprimir mensaje de error
            $this->resetInput();
            return;
        }
        //actualizamos los cambios
        $talla->update(['talla'=> $this->talla]);


        //limpiamos los inputs
        $this->resetInput();

        //ponemos accion en 1 para que muestre el formulario de crear
        $this->accion = 1;
    }

    public function destroy($id)
    {
        Talla::destroy($id);
    }

    public function resetInput()
    {
        $this->talla = '';
    }


}
