<div class="card card-primary">

    <div class="card-body">
        <h2 >Editar Compra</h2>
        @include('livewire.compra.formulario')
    </div>

    <div class="card-footer">
        <button type="submit" wire:click='actualizar' class="btn btn-primary">Actualizar</button>
        <button wire:click='cancelar' class="btn btn-default float-right">Cancelar</button>
    </div>

</div>


