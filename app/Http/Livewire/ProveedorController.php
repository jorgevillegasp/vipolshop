<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use Livewire\WithFileUploads;
use App\Models\Proveedor;

class ProveedorController extends Component
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
     * 1 = activa la tabla del listado de clientes.
     * 2 = activa el formulario de ingreso.
     * 3 = activa el formulario de edición.
     */
    public  $accion = 1;

    //Atributos de la tabla
    public $proveedor_id;
    public $ruc;
    public $nombre;
    public $direccion;
    public $correo;
    public $telefono;
    public $deuda;

    // Reglas (rules): Aquí establecemos las reglas de validación para las propiedades de un componente.
    protected $rules = [
        'ruc'       => 'required|numeric',
        'nombre'    => 'required|string',
        'direccion' => 'required',
        'correo'    => 'required|email',
        'telefono'  => 'required|min:10',
        'deuda'     => 'required'
    ];

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
        //Llamomos a la propiedas de validacion que se encuentra en $rules
        $this->validate();

        //Ejecutamos la creacion del nuevo proveedor
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
        //Llamomos a la propiedas de validacion que se encuentra en $rules
        $this->validate();

        //Verificamos que existe
        $proveedor = Proveedor::find($this->proveedor_id);

        //Actualizamos
        $proveedor->update([
            'ruc'       => $this->ruc,
            'nombre'    => $this->nombre,
            'direccion' => $this->direccion,
            'correo'    => $this->correo,
            'telefono'  => $this->telefono,
            'deuda'     => $this->deuda
        ]);

        $this->accion = 1;

    }

    public function editar($id)
    {

        //buscamos el proveedor en la base de datos
        $proveedor = Proveedor::find($id);

        $this->proveedor_id = $proveedor->id;
        $this->ruc          = $proveedor->ruc;
        $this->nombre       = $proveedor->nombre;
        $this->direccion    = $proveedor->direccion;
        $this->correo       = $proveedor->correo;
        $this->telefono     = $proveedor->telefono;
        $this->deuda        = $proveedor->deuda;

        $this->accion = 3;
    }

    public function eliminar($id)
    {
        Proveedor::destroy($id);
    }

    public function nuevoProveedor()
    {
        //Limpiamos los inputs
        $this->limpiar();
        //Mostramos el formulario de agregar Proveedor
        $this->accion = 2;
    }

    public function cancelar()
    {
        //limpiamos los inputs
        $this->limpiar();
        //Mostramos la lista de proveedores
        $this->accion = 1;
    }

    public function limpiar()
    {
        $this->proveedor_id = '';
        $this->ruc          = '';
        $this->nombre       = '';
        $this->direccion    = '';
        $this->correo       = '';
        $this->telefono     = '';
        $this->deuda        = '';
    }
}


