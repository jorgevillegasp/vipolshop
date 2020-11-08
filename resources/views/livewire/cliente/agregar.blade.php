<div class="card">

    <div class="card-body">
        <h2>Nuevo Cliente</h2>
        @include('livewire.cliente.formulario')
    </div>

    <div class="card-footer">
        <button type="submit" wire:click='store' class="btn btn-info">Guardar</button>
        <button wire:click='doAction(1)' class="btn btn-default float-right">Cancelar</button>
    </div>

</div>



