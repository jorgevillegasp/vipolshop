<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Cliente;
use App\Models\Sexo;

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
    public $deuda;

    //almacenar los datos de la tabla anidada
    public $sexos;

    public $paginacion = 10;


    public function render()
    {
        $this->sexos = Sexo::all();
        $info = Cliente::leftjoin('sexos as s','s.id', 'clientes.sexo_id')
                        ->select('clientes.*','s.sexo as sexo')
                        ->orderBy('clientes.id','desc')
                        ->paginate($this->paginacion);

        return view('livewire.cliente.index', [
            'clientes' => $info
        ]);
    }

    public function create()
    {
        $this->accion = 2;
    }

    public function store()
    {
        //Llamomos a la propiedas de validacion que se encuentra en $rules
        $this->validate();

        $cliente =  Cliente::create([
            'sexo_id'          => $this->sexo_id,
            'cedula'           => $this->cedula,
            'nombre_primero'   => $this->nombre_primero,
            'nombre_segundo'   => $this->nombre_segundo,
            'apellido_paterno' => $this->apellido_paterno,
            'apellido_materno' => $this->apellido_materno,
            'direccion'        => $this->direccion,
            'correo'           => $this->correo,
            'telefono'         => $this->telefono,
            'fecha_nacimiento' => $this->fecha_nacimiento,
            'deuda'            => $this->deuda,
        ]);

        $this->resetInput();
        $this->accion = 1;
    }

    public function edit($id)
    {

        $registro = Cliente::findOrFail($id);

        $this->cliente_id       = $registro->id;
        $this->sexo_id          = $registro->sexo_id;
        $this->cedula           = $registro->cedula;
        $this->nombre_primero   = $registro->nombre_primero;
        $this->nombre_segundo   = $registro->nombre_segundo;
        $this->apellido_paterno = $registro->apellido_paterno;
        $this->apellido_materno = $registro->apellido_materno;
        $this->direccion        = $registro->direccion;
        $this->correo           = $registro->correo;
        $this->telefono         = $registro->telefono;
        $this->fecha_nacimiento = $registro->fecha_nacimiento;
        $this->deuda            = $registro->deuda;

        //activamos el formulario de editar
        $this->accion = 3;
    }

    public function update()
    {

        //Llamomos a la propiedas de validacion que se encuentra en $rules
        $this->validate();

        $registro = Cliente::findOrFail($this->cliente_id);

        $registro->update([
            'sexo_id'          => $this->sexo_id,
            'cedula'           => $this->cedula,
            'nombre_primero'   => $this->nombre_primero,
            'nombre_segundo'   => $this->nombre_segundo,
            'apellido_paterno' => $this->apellido_paterno,
            'apellido_materno' => $this->apellido_materno,
            'direccion'        => $this->direccion,
            'correo'           => $this->correo,
            'telefono'         => $this->telefono,
            'fecha_nacimiento' => $this->fecha_nacimiento,
            'deuda'            => $this->deuda,
        ]);

        $this->resetInput();
        $this->accion = 1;
    }

    public function destroy($id)
    {
        Cliente::destroy($id);
    }

    //activa la vista edición o creación -  se lo usa mas en la accion de cancelar
    public function doAction($accion)
    {
        $this->resetInput();
        $this->accion = $accion;
    }

    public function resetInput()
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
        $this->deuda            = '';
    }

    // Reglas (rules): Aquí establecemos las reglas de validación para las propiedades de un componente.
    protected $rules = [
        'sexo_id'           => 'required',
        'cedula'            => 'required|numeric|min:8',
        'nombre_primero'    => 'required|string',
        'nombre_segundo'    => 'required|string',
        'apellido_paterno'  => 'required|string',
        'apellido_materno'  => 'required|string',
        'direccion'         => 'required|string',
        'correo'            => 'required|email',
        'telefono'          => 'required|numeric',
        'fecha_nacimiento'  => 'required|string',
        'deuda'             => 'required|numeric',
    ];
}
