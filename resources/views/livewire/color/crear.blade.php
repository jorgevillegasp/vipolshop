<h2>Nuevo Color</h2>

@include('livewire.color.formulario')

<button type="submit" wire:click='store' class="btn btn-info">
    Guardar
</button>

<button wire:click='resetInput' class="btn btn-default float-right">
    Cancelar
</button>
