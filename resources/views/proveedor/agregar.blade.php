<div class="card card-info">

    <div class="card-header">
        <h3 class="card-title">Nuevo Proveedor</h3>
    </div>

    <div class="card-body">
        @include('proveedor.formulario')
    </div>

    <div class="card-footer">
        <button type="submit" wire:click='agregar' class="btn btn-info">Guardar</button>
        <button wire:click='cancelar' class="btn btn-default float-right">Cancelar</button>
    </div>

</div>
