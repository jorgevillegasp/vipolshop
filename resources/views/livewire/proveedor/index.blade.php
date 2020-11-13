{{-- Le indicamos el titulo  --}}
@section('title', 'Proveedores')

{{--------------------------------------------------------------
  | Activadores de vistas.
  | por defecto se muestra el listado de proveedores
----------------------------------------------------------------}}

{{-- Muestra la tabla del listado de los proveedores --}}
@if ($accion == 1)
    @include('livewire.proveedor.tabla')

{{-- muestra el formulario para ingresar un nuevo proveedor --}}
@elseif ($accion == 2)
    @include('livewire.proveedor.agregar')

{{-- muestra el formulario para editar los datos del proveedor --}}
@elseif($accion == 3)
    @include('livewire.proveedor.editar')

@endif
