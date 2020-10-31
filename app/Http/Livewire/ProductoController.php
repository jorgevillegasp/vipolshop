<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;

class ProductoController extends Component
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
    public $deuda;

    //almacenar los datos de la tabla anidada
    public $sexos;
    public function render()
    {

        return view('livewire.producto.index');
    }
}
