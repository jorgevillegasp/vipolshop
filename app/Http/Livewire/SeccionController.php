<?php

namespace App\Http\Livewire;

use App\Models\Seccion;
use Livewire\Component;
use Livewire\WithPagination;
use Livewire\WithFileUploads;

class SeccionController extends Component
{
    /**
     *  use WithPagination
     *
     * Para corregir el error de la paginacion cuando se elimina un registro
     * de la tabla, no muestre el error al volver a cargar la tabla.
    */
    use WithPagination;

    use WithFileUploads;

    //Indicamos que vamos a usar el tema de bootstrap en la paginación
    protected $paginationTheme = 'bootstrap';


    public  $vista = "crear";

    //Atributos de la tabla
    public $seccion_id;
    public $seccion;
    public $descripcion;

    //paginacion de las tablas
    public $pagination = 10;

    public function render()
    {
        $record = Seccion::orderBy('id','desc')->paginate($this->pagination);
        return view('livewire.seccion.index',["secciones" => $record]);
    }

    /**
    * Almacene un recurso recién creado en el almacenamiento.
    */
    public function store()
    {
        $this->validate([
            'seccion'    =>  'required|string',
            'descripcion' => 'required|string'
        ]);

        Seccion::create([
            'seccion'    =>  $this->seccion,
            'descripcion'=>  $this->descripcion
        ]);

        $this->resetInput();
    }

    /**
    * Muestre el formulario para editar el recurso especificado.
    */
    public function edit($id)
    {
        //Verificamos que existe
        $datos = Seccion::find($id);

        $this->seccion_id   = $datos->id;
        $this->seccion      = $datos->seccion;
        $this->descripcion  = $datos->descripcion;

        $this->vista = 'editar';
    }

    /**
    * Actualiza el recurso especificado en el almacenamiento.
    */
    public function update()
    {
        //Verificamos que existe
        $seccion = Seccion::find($this->seccion_id);

        //valida si existe otro seccion con el mismo nombre
        $existe = Seccion::where('seccion', $this->seccion)
            ->where('id', '!=', $this->seccion_id)
            ->select('seccion')
            ->get();

        if( $existe->count() > 0) {
            //imprimir mensaje de error
            session()->flash('mensaje-error', 'El color ya existe');
            $this->resetInput();
            return;
        }
        //actualizamos los cambios
        $seccion->update([
            'seccion'       =>  $this->seccion,
            'descripcion'   =>  $this->descripcion
        ]);
        session()->flash('mensaje', 'Se actualizo  el seccion '.$this->seccion.' con exito');


        //limpiamos los inputs
        $this->resetInput();

        $this->vista = 'crear';
    }

    /**
    * Elimina el recurso especificado del almacenamiento.
    */
    public function destroy($id)
    {
        Seccion::destroy($id);
    }

    public function resetInput()
    {
        $this->seccion = '';
        $this->descripcion = '';
    }

}
