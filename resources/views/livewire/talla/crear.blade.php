<h2>Nueva Talla</h2>

@include('livewire.talla.formulario')

<div class="row">
    <div class="col-6">
        <button class="btn btn-info" type="button" wire:click='store'>
            Guardar
        </button>
    </div>
    <div class="col-6">
        <button wire:click='default' class="btn btn-default float-right">
            Cancelar
        </button>
    </div>
</div>
