<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Http\Middleware;
use Livewire\WithPagination;
use Livewire\WithFileUploads;
use App\Models\Cliente;

class ClienteController extends Component
{
    use WithPagination;

    //titulo de la pagina
    public $titulo = 'Cliente';
    /**
     * $accion es la accion que se esta realizando en ese momento donde:
     *
     * 1 = activa la tabla del listado de clientes.
     * 2 = activa el formulario de ingreso.
     * 3 = activa el formulario de edicion.
     */
    public  $accion = 1;

    public function render()
    {

        return view('cliente.index', [
            'clientes' => Cliente::all()
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
