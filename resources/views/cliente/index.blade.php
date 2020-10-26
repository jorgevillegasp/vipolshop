{{-- Le indicamos el titulo  --}}
@section('title', 'Cliente')


{{--------------------------------------------------------------
  | Activadores de vistas.
  | por defecto se fuestra el listado de clientes
----------------------------------------------------------------}}

{{-- amuestra el listado de los clientes --}}
<div id="tabla">
    @include('cliente.tabla')
</div>


{{-- muestra el formulario para ingresar un nuevo cliente --}}
<div id="agregar">
    @include('cliente.agregar')
</div>


{{-- muestra el formulario para editar los datos del cliente --}}
<div id="editar">
    @include('cliente.editar')
</div>


@section('js')

<script>
    var elemento = 'tabla';
    vista(elemento);

    function vista(var elemento)
    {
        if(elemento = 'tabla')
        {
            mostrar('tabla');
            ocultar('agregar');
            ocultar('editar');
        }
        elseif(elemento = 'agregar')
        {
            mostrar('agregar');
            ocultar('tabla');
            ocultar('editar');
        }
        elseif(elemento = 'editar')
        {
            mostrar('editar');
            ocultar('agregar');
            ocultar('tabla');
        }
    }


    function ocultar(elemento){
        document.getElementById(elemento).style.display = 'none';
    }
    function mostrar(elemento){
        document.getElementById(elemento).style.display = 'block';
        }
</script>
@stop
