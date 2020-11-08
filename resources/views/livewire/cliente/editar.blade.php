<div class="card card-info">

    <div class="card-body">
        <h2>Editar Cliente</h2>
        @include('livewire.cliente.formulario')
    </div>

    <div class="card-footer">
        <button type="submit" wire:click='update' class="btn btn-info">Actualizar</button>
        <button wire:click='doAction(1)' class="btn btn-default float-right">Cancelar</button>
    </div>

</div>
