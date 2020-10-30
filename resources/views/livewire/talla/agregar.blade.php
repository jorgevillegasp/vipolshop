<div class="card card-info">

    <div class="card-header">
        <h3 class="card-title">Nueva Talla</h3>
    </div>

    <div class="card-body">
        @include('livewire.talla.formulario')
    </div>

    <div class="card-footer">
        <button type="submit" wire:click='store' class="btn btn-info">Guardar</button>
        <button wire:click='resetInput' class="btn btn-default float-right">Cancelar</button>
    </div>

</div>
