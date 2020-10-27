<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Http\Middleware;
use Livewire\WithPagination;
use Livewire\WithFileUploads;
use App\Models\Cliente;

class ClienteController extends Component
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
    public $titulo = 'Cliente';

    /**
     * $acción es la acción que se esta realizando en ese momento donde:
     *
     * 1 = activa la tabla del listado de clientes.
     * 2 = activa el formulario de ingreso.
     * 3 = activa el formulario de edición.
     */
    public  $accion = 1;

    //Atributos de la tabla
    public $cliente_id;
    public $sexo_id;
    public $cedula;
    public $nombre_primero;
    public $nombre_segundo;
    public $apellido_paterno;
    public $apellido_materno;
    public $direccion;
    public $correo;
    public $telefono;
    public $fecha_nacimiento;


    public function render()
    {
        return view('cliente.index', [
            'clientes' => Cliente::paginate(8)
        ]);
    }

    public function editar()
    {
        //activamos el formulario de editar
        $this->accion = 3;
    }

    public function eliminar($id)
    {
        Cliente::destroy($id);
    }

    public function limpiar()
    {
        $this->cliente_id       = '';
        $this->sexo_id          = '';
        $this->cedula           = '';
        $this->nombre_primero   = '';
        $this->nombre_segundo   = '';
        $this->apellido_paterno = '';
        $this->apellido_materno = '';
        $this->direccion        = '';
        $this->correo           = '';
        $this->telefono         = '';
        $this->fecha_nacimiento = '';
    }
}
