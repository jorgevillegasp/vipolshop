<h2>Nuevo Color</h2>

@include('livewire.color.formulario')

<div class="row">
    <div class="col-6">
        <button type="submit" wire:click='store' class="btn btn-info">
            Guardar
        </button>
    </div>
    <div class="col-6">
        <button wire:click='default' class="btn btn-default float-right">
            Cancelar
        </button>
    </div>
</div>