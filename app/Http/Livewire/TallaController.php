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
     * Muestra la vista que vamos a utilizar
     */
    public  $vista = "crear";

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
            $this->default();
            return;
        }
        else
        {
            Talla::create(['talla'=> $this->talla]);
            $this->default();
        }

    }

    public function edit($id)
    {
        //Verificamos que existe
        $datos = Talla::find($id);

        $this->talla_id = $datos->id;
        $this->talla = $datos->talla;

        $this->vista = "editar";

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
            $this->default();
            return;
        }
        //actualizamos los cambios
        $talla->update(['talla'=> $this->talla]);


        //limpiamos los inputs
        $this->default();

        //ponemos vista en 1 para que muestre el formulario de crear
        $this->vista = "crear";
    }

    public function default()
    {
        $this->talla = '';
        $this->vista = "crear";
    }

    public function destroy($id)
    {
        Talla::destroy($id);
    }



}
