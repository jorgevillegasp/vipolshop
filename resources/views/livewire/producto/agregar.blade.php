<div class="card card-info">

    <div class="card-body">
        <h2>Agregar Producto</h2>
        @include('livewire.producto.formulario')
        <button type="submit" wire:click='store' class="btn btn-primary">Guardar</button>
        <button wire:click='doAction(1)' class="btn btn-default">Cancelar</button>
    </div>

</div>
