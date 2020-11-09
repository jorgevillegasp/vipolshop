<h2>Editar Categoria</h2>

@include('livewire.categoria.formulario')


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
