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

    public function render()
    {
        return view('cliente.index', [
            'clientes' => Cliente::paginate(8)
        ]);
    }

    public function agregar()
    {
        //activamos el formulario de agregar
        $this->accion = 2;

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

    public function show()
    {
        $this->accion = 1;
    }



    public $name;
    public $email;

    protected $rules = [
        'name' => 'required|min:6',
        'email' => 'required|email',
    ];

    public function submit()
    {
        $this->validate();

        // Execution doesn't reach here if validation fails.

        Contact::create([
            'name' => $this->name,
            'email' => $this->email,
        ]);
    }


    use WithFileUploads;

    public $photo;

    public function save()
    {
        $this->validate([
            'photo' => 'image|max:1024', // 1MB Max
        ]);

        $this->photo->store('photos');
    }
}
