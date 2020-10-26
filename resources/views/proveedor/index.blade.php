{{-- Le indicamos el titulo  --}}
@section('title', 'Proveedores')

{{--------------------------------------------------------------
  | Activadores de vistas.
  | por defecto se muestra el listado de proveedores
----------------------------------------------------------------}}

{{-- Muestra la tabla del listado de los proveedores --}}
@if ($accion == 1)
    @include('proveedor.tabla')

{{-- muestra el formulario para ingresar un nuevo proveedor --}}
@elseif ($accion == 2)
    @include('proveedor.agregar')

{{-- muestra el formulario para editar los datos del proveedor --}}
@elseif($accion == 3)
    @include('proveedor.editar')

@endif

