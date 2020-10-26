<div class="card card-primary">

    <div class="card-header">
        <h3 class="card-title">Editar Proveedor</h3>
    </div>

    <div class="card-body">
        @include('proveedor.formulario')
    </div>

    <div class="card-footer">
        <button type="submit" wire:click='actualizar' class="btn btn-primary">Actualizar</button>
        <button wire:click='cancelar' class="btn btn-default float-right">Cancelar</button>
    </div>

</div>


