<div class="card card-info">

    <div class="card-header">
        <h3 class="card-title">Editar Forma De Pago</h3>
    </div>

    <div class="card-body">
        @include('livewire.forma-de-pago.formulario')
    </div>

    <div class="card-footer">
        <button type="submit" wire:click='update' class="btn btn-info">Actualizar</button>
        <button wire:click='cancelar' class="btn btn-default float-right">Cancelar</button>
    </div>

</div>


