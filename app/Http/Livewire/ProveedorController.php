<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use Livewire\WithFileUploads;
use App\Models\Proveedor;

class ProveedorController extends Component
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

    //titulo de la pagina
    public $titulo = 'Proveedor';

    /**
     * $acción es la acción que se esta realizando en ese momento donde:
     *
     * 1 = activa la tabla del listado de clientes.
     * 2 = activa el formulario de ingreso.
     * 3 = activa el formulario de edición.
     */
    public  $accion = 1;

    public $proveedor_id,$ruc,$nombre,$direccion,$correo,$telefono,$deuda;

    public function render()
    {
        $proveedores = Proveedor::orderBy('id','desc')->paginate(8);

        return view(
            'proveedor.index',
            ['proveedores' => $proveedores]
        );
    }

    public function agregar()
    {
        validacion();

        Proveedor::create([
            'ruc'       => $this->ruc,
            'nombre'    => $this->nombre,
            'direccion' => $this->direccion,
            'correo'    => $this->correo,
            'telefono'  => $this->telefono,
            'deuda'     => $this->deuda
        ]);

        $this->accion = 1;
    }

    public function actualizar()
    {
        validacion();

        if($this->proveedor_id)
        {
            $proveedor = Proveedor::find($this->proveedor_id);

            $proveedor->update([
                'ruc'       => $this->ruc,
                'nombre'    => $this->nombre,
                'direccion' => $this->direccion,
                'correo'    => $this->correo,
                'telefono'  => $this->telefono,
                'deuda'     => $this->deuda
            ]);
        }

        //limpiamos las cagas del contenido
        $this->limpiarContenido();
    }

    public function eliminar($id)
    {
        Proveedor::destroy($id);
    }

    public function editar($id)
    {
        $this->accion = 3;

        //buscamos el proveedor en la base de datos
        $proveedor = Proveedor::find($id);

        $this->proveedor_id = $proveedor->id;
        $this->ruc          = $proveedor->ruc;
        $this->nombre       = $proveedor->nombre;
        $this->direccion    = $proveedor->direccion;
        $this->correo       = $proveedor->correo;
        $this->telefono     = $proveedor->telefono;
        $this->deuda        = $proveedor->deuda;

        $this->accion = 1;
    }

    public function validacion()
    {
        $this->validate([
            'ruc'       => 'required | min:5',
            'nombre'    => 'required | min:5',
            'direccion' => 'required | min:5',
            'correo'    => 'required | min:5',
            'telefono'  => 'required | min:5',
            'deuda'     => 'required | numeric'
        ]);
    }

    public function limpiarContenido()
    {
        $this->validate([
            $this->ruc       = '',
            $this->nombre    = '',
            $this->direccion = '',
            $this->correo    = '',
            $this->telefono  = '',
            $this->deuda     = ''
        ]);
    }
}


