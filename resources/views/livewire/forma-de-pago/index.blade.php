{{-- Le indicamos el titulo --}}
@section('title', 'FormaDePago')


<div class="content">
    <div class="row">
        <div class="col-md-6">
            @if ($accion == 1)
                @include('livewire.forma-de-pago.agregar')
            @elseif ($accion == 2)
                @include('livewire.forma-de-pago.editar')
            @endif
        </div>
        <div class="col-md-6">
            @include('livewire.forma-de-pago.tabla')
        </div>
    </div>
</div>



