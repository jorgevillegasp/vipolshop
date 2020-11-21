<div class="content">
    <div class="card">
        <div class="card-body ">
            <div class="row">
                <div class="col-md-8">
                    <h2 class="d-inline mr-2 float-left">Listado de compraes</h2>
                    <button wire:click='nuevocompra' class="btn btn-primary d-inline mb-2">Nuevo</button>
                </div>
                <div class="col-md-4">
                    @include('comun.search')
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class=" table-responsive p-0">
                        <table class="table table-hover text-nowrap table-responsive-lg">
                            <thead class="">
                                <tr>
                                    <th>ID</th>
                                    <th>Fecha</th>
                                    <th>Proveedor</th>
                                    <th>Costo</th>
                                    <th>IVA</th>
                                    <th colspan="2">&nbsp;</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($compras as $compra)
                                    <tr>
                                        <th>{{ $compra->id }}</th>
                                        <td>{{ $compra->fecha_compra }}</td>
                                        <td>{{ $compra->proveedor }}</td>
                                        <td>{{ $compra->costo_compra }}</td>
                                        <td>{{ $compra->iva }}</td>
                                        <td>
                                            <button wire:click='editar({{ $compra->id }})' type="button"
                                                class="btn btn-info">
                                                editar
                                            </button>
                                        </td>
                                        <td>
                                            <button type="button" class="btn btn-danger">
                                                Eliminar
                                            </button>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>

                        <div class="pagination pagination-sm m-0 float-right">
                            {{ $compras->links() }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
