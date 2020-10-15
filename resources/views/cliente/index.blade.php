{{-- Le indicamos el titulo  --}}
@section('title', 'Cliente')


{{--------------------------------------------------------------
  | Activadores de vistas.
  | por defecto se fuestra el listado de clientes
----------------------------------------------------------------}}

{{-- amuestra el listado de los clientes --}}
@if ($accion == 1)  
    @include('cliente.tabla')

{{-- muestra el formulario para ingresar un nuevo cliente --}}
@elseif ($accion == 2)  
    @include('cliente.agregar')
    
{{-- muestra el formulario para editar los datos del cliente --}}
@elseif($accion == 3)  
    @include('cliente.editar')

@endif

