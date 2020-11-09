<h2>Editar Seccion</h2>

@include('livewire.seccion.formulario')


<div class="row">
    <div class="col-6">
        <button type="submit" wire:click='update' class="btn btn-info">
            Actualizar
        </button>
    </div>
    <div class="col-6">
        <button wire:click='default' class="btn btn-default float-right">
            Cancelar
        </button>
    </div>
</div>
