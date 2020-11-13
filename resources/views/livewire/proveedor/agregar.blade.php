<div class="card card-info">

    <div class="card-body">
        <h2>Nuevo Proveedor</h2>
        @include('livewire.proveedor.formulario')
    </div>

    <div class="card-footer">
        <button type="submit" wire:click='agregar' class="btn btn-info">Guardar</button>
        <button wire:click='cancelar' class="btn btn-default float-right">Cancelar</button>
    </div>

</div>
