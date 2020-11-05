<?php

namespace App\Http\Livewire;

use App\Models\Color;
use App\Models\Talla;
use Livewire\Component;
use App\Models\Producto;
use Livewire\WithPagination;
use Livewire\WithFileUploads;

class ProductoController extends Component
{
    /**
     *  use WithPagination
     *
     * Para corregir el error de la paginacion cuando se elimina un registro
     * de la tabla, no muestre el error al volver a cargar la tabla.
    */
    use WithPagination;

    use WithFileUploads;

    //Indicamos que vamos a usar el tema de bootstrap en la paginación
    protected $paginationTheme = 'bootstrap';


    /**
     * $action es la acción que se esta realizando en ese momento donde:
     *
     * 1 = activa la tabla de los registros.
     * 2 = activa el formulario de ingreso.
     * 3 = activa el formulario de edición.
     */
    public  $action = 1;

    //Atributos de la tabla
    public $producto_id;
    public $color_id;
    public $talla_id;
    public $nombre;
    public $imagen;
    public $precio_venta;
    public $stock;

    //almacenar los datos de la tabla anidada
    public $colores;
    public $tallas;

    //paginacion de las tablas
    public $pagination = 10;



    public function render()
    {
        $this->tallas = Talla::all();
        $this->colores = Color::all();
        $record = Producto::leftjoin('producto_detalles as pd','pd.producto_id','productos.id')
                        ->leftjoin('colores','colores.id','pd.color_id')
                        ->leftjoin('producto_detalle_tallas as pdt','pdt.producto_detalle_id','pd.id')
                        ->leftjoin('tallas as t','t.id','pdt.talla_id')
                        ->select('productos.*','pd.imagen','pd.precio_venta','pd.stock','colores.color','t.talla')
                        ->orderBy('productos.id','desc')
                        ->paginate($this->pagination);

        return view('livewire.producto.index',['productos' => $record]);
    }

    public function store()
    {
        //Validamos los datos llamando a la propiedades se encuentra en $rules
        $this->validate();

        $producto =  Producto::create([
            'color_id'     => $this->color_id,
            'talla_id'     => $this->talla_id,
            'nombre'       => $this->nombre,
            'precio_venta' => $this->precio_venta,
            'imagen'       => $this->imagen,
            'stock'        => $this->stock
        ]);

        $this->resetInput();
        $this->action = 1;

    }

    public function doAction($action)
    {
        $this->action = $action;
        $this->resetInput();
    }

    public function resetInput()
    {
        $this->nombre = '';
        $this->imagen = '';
        $this->nombre = '';
        $this->stock  = '';
        $this->color  = '';
        $this->talla  = '';
        $this->precio_venta = '';
    }

    // Reglas (rules): Aquí establecemos las reglas de validación para las propiedades de un componente.
    protected $rules = [
        'color_id'     => 'required|numeric',
        'talla_id'     => 'required|numeric',
        'nombre'       => 'required|string',
        'precio_venta' => 'required|numeric',
        'imagen'       => 'image|max:1024', // 1MB Max
        'stock'        => 'required|numeric'
    ];


}
