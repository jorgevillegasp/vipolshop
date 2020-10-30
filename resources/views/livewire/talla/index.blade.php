{{-- Le indicamos el titulo --}}
@section('title', 'Talla')


<div class="content">
    <div class="row">
        <div class="col-md-6">
            @if ($accion == 1)
                @include('livewire.talla.agregar')
            @elseif ($accion == 2)
                @include('livewire.talla.editar')
            @endif
        </div>
        <div class="col-md-6">
            @include('livewire.talla.tabla')
        </div>
    </div>
</div>



