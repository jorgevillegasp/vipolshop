

<div>

<span class="d-none">{{ $contador = 0 }}</span>



@foreach ($productos as $producto)

    <h3>{{ $contador = $contador + 1 }} ) {{ $producto->nombre }}</h3>
    <p>
        <strong>Categoria : </strong>{{ $producto->categoria->categoria }} <br>
        <strong>Estado : </strong>{{ $producto->estado }} <br>
        <strong>Colores : </strong>
            @foreach ($producto->producto_detalles as $producto_detalle)
            <br>
                {{-- Obtenemos el color de los productos --}}
                {{ $producto_detalle->color->color }}


                @foreach ($producto_detalle->producto_detalle_tallas as $producto_detalle_talla)

                    {{-- Obtenemos los id de las tallas --}}
                    <strong>ID : </strong>{{ $producto_detalle_talla }}


                @endforeach


            @endforeach
        <br>

    </p>
@endforeach

<div>
