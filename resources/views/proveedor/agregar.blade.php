<div class="card card-primary">

    <div class="card-header">
        <h3 class="card-title">Nuevo Proveedor</h3>
    </div>

    <div class="card-body">
        @include('proveedor.formulario')
    </div>

    <div class="card-footer">
        <button type="submit" wire:click='store' class="btn btn-primary">Guardar</button>
        <a href="/proveedores" class="btn btn-danger">Cancelar</a>
    </div>

</div>
