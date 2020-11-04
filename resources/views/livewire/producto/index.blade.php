{{-- Le indicamos el titulo  --}}
@section('title', 'Productos')


{{--------------------------------------------------------------
  | Activadores de vistas.
  | por defecto se fuestra el listado de Productos
----------------------------------------------------------------}}

{{-- Muestra la tabla del listado de los clientees --}}
@if ($action == 1)
    @include('livewire.producto.tabla')

{{-- muestra el formulario para ingresar un nuevo cliente --}}
@elseif ($action == 2)
    @include('livewire.producto.agregar')

{{-- muestra el formulario para editar los datos del cliente --}}
@elseif($action == 3)
    @include('livewire.producto.editar')

@endif


