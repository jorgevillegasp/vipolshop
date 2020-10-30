<div class="card card-info">

    <div class="card-header">
        <h3 class="card-title">Editar Cliente</h3>
    </div>

    <div class="card-body">
        @include('livewire.cliente.formulario')
    </div>

    <div class="card-footer">
        <button type="submit" wire:click='update' class="btn btn-info">Actualizar</button>
        <button wire:click='doAction(1)' class="btn btn-default float-right">Cancelar</button>
    </div>

</div>
