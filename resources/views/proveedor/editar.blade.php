<div class="card card-primary">

    <div class="card-header">
        <h3 class="card-title">Editar Proveedor</h3>
    </div>

    <div class="card-body">
        @include('proveedor.formulario')
    </div>

    <div class="card-footer">
        <button type="submit" wire:click='actualizar' class="btn btn-primary">Actualizar</button>
        <button type="submit" wire:click='limpiarContenido' class="btn btn-link">Cancelar</button>
    </div>

</div>
