<h2>Nueva Talla</h2>

@include('livewire.talla.formulario')

<button type="submit" wire:click='store' class="btn btn-info">
    Guardar
</button>
<button wire:click='default' class="btn btn-default">
    Cancelar
</button>
