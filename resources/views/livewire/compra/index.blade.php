{{-- Le indicamos el titulo  --}}
@section('title', 'compra')


{{--------------------------------------------------------------
  | Activadores de vistas.
  | por defecto se fuestra el listado de compras
----------------------------------------------------------------}}

{{-- Muestra la tabla del listado de los compras --}}
@if ($action == 1)
    @include('livewire.compra.tabla')

{{-- muestra el formulario para ingresar un nuevo compra --}}
@elseif ($action == 2)
    @include('livewire.compra.crear')

{{-- muestra el formulario para editar los datos del compra --}}
@elseif($action == 3)
    @include('livewire.compra.editar')

@endif


