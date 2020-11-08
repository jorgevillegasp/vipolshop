
<h2>Editar Talla</h2>

@include('livewire.talla.formulario')

<div class="row">
    <div class="col-6">
        <button type="submit" wire:click='store' class="btn btn-info">
            Actualizar
        </button>
    </div>
    <div class="col-6">
        <button wire:click='default' class="btn btn-default float-right">
            Cancelar
        </button>
    </div>
</div>




