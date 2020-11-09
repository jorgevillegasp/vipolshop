<h2>Nueva Seccion</h2>

@include('livewire.seccion.formulario')


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
