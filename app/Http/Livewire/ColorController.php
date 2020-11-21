<?php

namespace App\Http\Livewire;

use App\Models\Color;
use Livewire\Component;
use Livewire\WithPagination;

class ColorController extends Component
{
    //Para corregir el error de la paginacion cuando se elimina un registro de la tabla, no muestre el error al volver a cargar la tabla.
    use WithPagination;

    //Indicamos que vamos a usar el tema de bootstrap en la paginación. Debido a que livewire usa por defecto Tailwind
    protected $paginationTheme = 'bootstrap';

    //titulo de la pagina
    public $titulo = 'Compra';

    /**
     * $acción es la acción que se esta realizando en ese momento donde:
     *
     * 1 = activa la tabla del listado de clientes.
     * 2 = activa el formulario de ingreso.
     * 3 = activa el formulario de edición.
     */
    public  $accion = 1;

    //Atributos de la tabla
    public $color_id;
    public $color;
    public $pagination = 10;

    public function render()
    {
        $datos = Color::orderBy('id','desc')->paginate(8);
        return view('livewire.color.index',['colores' => $datos]);
    }

    public function store()
    {
        //validación campos requeridos
        $this->validate([
            'color' => 'required'
        ]);

        //valida si existe otro color con el mismo nombre
        $existe = Color::where('color', $this->color)
            ->where('id', '<>', $this->color_id)
            ->select('color')
            ->get();

        if( $existe->count() > 0) {
            //imprimir mensaje de error
            $this->default();
            return;
        }
        else
        {
            Color::create(['color'=> $this->color]);
            session()->flash('mensaje', 'Se creo el color '. $this->color .' con exito');
            $this->default();
        }

    }

    public function edit($id)
    {
        //Verificamos que existe
        $datos = Color::find($id);

        $this->color_id = $datos->id;
        $this->color = $datos->color;

        $this->vista = "editar";

    }

    public function update()
    {
        //Verificamos que existe
        $color = Color::find($this->color_id);

        //valida si existe otro color con el mismo nombre
        $existe = Color::where('color', $this->color)
            ->where('id', '!=', $this->color_id)
            ->select('color')
            ->get();

        if( $existe->count() > 0) {
            //imprimir mensaje de error
            session()->flash('mensaje-error', 'El color ya existe');
            $this->default();
            return;
        }
        //actualizamos los cambios
        $color->update(['color'=> $this->color]);
        session()->flash('mensaje', 'Se actualizo  el color '.$this->color.' con exito');


        //limpiamos los inputs
        $this->default();

        //ponemos vista en 1 para que muestre el formulario de crear
        $this->vista = "crear";
    }

    public function destroy($id)
    {
        Color::destroy($id);
        session()->flash('mensaje', 'Se elimino con exito');
    }

    public function default()
    {
        $this->color = '';
        $this->vista = "crear";
    }


}
