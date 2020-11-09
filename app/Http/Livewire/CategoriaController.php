<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Categoria;
use App\Models\Seccion;
use Livewire\WithPagination;
use phpDocumentor\Reflection\Types\This;

class CategoriaController extends Component
{
    /**
     *  use WithPagination
     *
     * Para corregir el error de la paginacion cuando se elimina un registro
     * de la tabla, no muestre el error al volver a cargar la tabla.
    */
    use WithPagination;

    //Indicamos que vamos a usar el tema de bootstrap en la paginación
    protected $paginationTheme = 'bootstrap';


    public  $vista = "crear";

    //Atributos de la tabla
    public $categoria_id;
    public $seccion_id;
    public $categoria;
    public $descripcion;
    public $estado;

    public $secciones;
    //Para la busqueda
    public $search;
    //paginacion de las tablas
    public $pagination = 10;

    

    public function render()
    {
        $this->secciones = Seccion::orderBy('id','desc')->get();
        
        if(strlen($this->search) > 0)
        {
            $record = Categoria::leftjoin('secciones as s','s.id','categorias.seccion_id')
                        ->select('categorias.*','s.seccion')
                        ->where('categorias.categoria', 'like', '%' .  $this->search . '%')
                        ->orWhere('categorias.estado', 'like', '%' .  $this->search . '%')
                        ->orWhere('s.seccion', 'like', '%' .  $this->search . '%')
                        ->paginate($this->pagination);

            return view('livewire.categoria.index',[
                'categorias' => $record
            ]);

        }
        else {

			$record = Categoria::leftjoin('secciones as s','s.id','categorias.seccion_id')
                ->select('categorias.*','s.seccion')
                ->orderBy('id','desc')
                ->paginate($this->pagination);

                return view('livewire.categoria.index',[
                    'categorias' => $record
                ]);
        }
    }
    
    /**
    * Almacene un recurso recién creado en el almacenamiento.
    */
    public function store()
    {
        //Validamos los campos.
        $this->validate([
            'categoria'  =>  'required',
            'descripcion'=>  'required',
            'estado'     =>  'required',
            'seccion_id' =>  'required',
        ]);

        //Consultamos si la seccion existe
        $existe_seccion = Seccion::find($this->seccion_id);

        //Validamos si la seccion exixte
        if($existe_seccion->count() > 0) {
            //Almacenamos la Categoria en la base de datos
            Categoria::create([
                'seccion_id'    => $this->seccion_id,
                'categoria'     => $this->categoria,
                'descripcion'   => $this->descripcion,
                'estado'        => $this->estado
            ]);
            $this->default();
        }
    }

    /**
    * Muestre el formulario para editar el recurso especificado.
    */
    public function edit($id)
    {
        //Verificamos que existe
        $datos = Categoria::find($id);

        $this->seccion_id   = $datos->seccion_id;
        $this->categoria_id = $datos->id;
        $this->categoria    = $datos->categoria;
        $this->descripcion  = $datos->descripcion;
        $this->estado       = $datos->estado;

        $this->vista = 'editar';
    }
    
    /**
    * Actualiza el recurso especificado en el almacenamiento.
    */
    public function update()
    {
        //Validamos los campos.
        $this->validate([
            'categoria'  =>  'required',
            'descripcion'=>  'required',
            'estado'     =>  'required',
            'seccion_id' =>  'required',
        ]);

        //Consultamos si la seccion existe
        $existe_seccion = Seccion::find($this->seccion_id);
        //Consultamos si la categoria existe
        $categoria = Categoria::find($this->categoria_id);

        //Validamos si la seccion existe
        if($existe_seccion->count() > 0) {
            //Validamos si existe la categoria que vamos a actualizar
            if($categoria->count() > 0) {
                //Actualizamos la Categoria en la base de datos
                $categoria->update([
                    'seccion_id'    => $this->seccion_id,
                    'categoria'     => $this->categoria,
                    'descripcion'   => $this->descripcion,
                    'estado'        => $this->estado
                ]);
                $this->default();
            }
        }
    }
    
    /**
    * Elimina el recurso especificado del almacenamiento.
    */
    public function destroy($id)
    {
        //
    }

    public function default()
    {
        $this->seccion_id   = '';
        $this->categoria    = '';
        $this->descripcion  = '';
        $this->estado       = '';

        $this->vista = 'crear';
    }

}
