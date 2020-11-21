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

        $record =  Producto::leftjoin('categorias as c','c.id','productos.categoria_id')
                    ->leftjoin('secciones as s','s.id','c.seccion_id')
                    ->select('productos.*','c.categoria','s.seccion')
                    ->ordeRBy('productoS.id','desc')
                    ->paginate($this->pagination);
        //Producto::all()->paginate($this->pagination);

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

    public function create()
    {
        $this->action = 2;
    }

    public function show($id)
    {

        //buscamos el producto en la base de datos
        $producto = Proveedor::find($id);

        if($producto->count() > 0)
        {

        }



    }

    public function update()
    {
        //Validamos los campos.
        $this->validate([
            'categoria'  =>  'required',
            'descripcion'=>  'required',
            'estado'     =>  'required',
            'seccion_id' =>  'required',
        ]);

        //Consultamos si la seccion existe
        $existe_seccion = Seccion::find($this->seccion_id);
        //Consultamos si la categoria existe
        $categoria = Categoria::find($this->categoria_id);

        //Validamos si la seccion existe
        if($existe_seccion->count() > 0) {
            //Validamos si existe la categoria que vamos a actualizar
            if($categoria->count() > 0) {
                //Actualizamos la Categoria en la base de datos
                $categoria->update([
                    'seccion_id'    => $this->seccion_id,
                    'categoria'     => $this->categoria,
                    'descripcion'   => $this->descripcion,
                    'estado'        => $this->estado
                ]);
                $this->default();
            }
        }
    }

    public function edit($id)
    {
        //Verificamos que existe
        $datos = Producto::find($id);

        $this->producto_id   = $datos->producto_id;
        $this->categoria_id = $datos->id;
        $this->categoria    = $datos->categoria;
        $this->descripcion  = $datos->descripcion;
        $this->estado       = $datos->estado;

        $this->vista = 'editar';

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
