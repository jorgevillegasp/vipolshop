{{-- Le indicamos el titulo  --}}
@section('title', 'Cliente')


{{--------------------------------------------------------------
  | Activadores de vistas.
  | por defecto se fuestra el listado de clientes
----------------------------------------------------------------}}

{{-- Muestra la tabla del listado de los clientees --}}
@if ($accion == 1)

    @include('livewire.cliente.tabla')
 
{{-- muestra el formulario para ingresar un nuevo cliente --}}
@elseif ($accion == 2)
    @include('livewire.cliente.agregar')
    

{{-- muestra el formulario para editar los datos del cliente --}}
@elseif($accion == 3)
    @include('livewire.cliente.editar')

@endif

