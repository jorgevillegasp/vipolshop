{{-- Le indicamos el titulo --}}
@section('title', 'Colores')

<div class="content">
    <div>
        @include('comun.alertas')
    </div>
    
    <div class="row">
        <div class="col-md-6">
            @if ($accion == 1)
                @include('livewire.color.agregar')
            @elseif ($accion == 2)
                @include('livewire.color.editar')
            @endif
        </div>
        <div class="col-md-6">
            @include('livewire.color.tabla')
        </div>
    </div>
</div>

