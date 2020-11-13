<div class="content">
    <div class="card">
        <div class="card-body ">
            <div class="row">
                <div class="col-md-8">
                    <h2 class="d-inline mr-2 float-left">Listado de Proveedores</h2>
                    <button wire:click='nuevoProveedor' class="btn btn-primary d-inline mb-2">Nuevo</button>
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
                                    <th>Proveedor</th>
                                    <th>Direccion</th>
                                    <th>Correo</th>
                                    <th>Telefono</th>
                                    <th>Deuda</th>
                                    <th>Opciones</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($proveedores as $proveedor)
                                    <tr>
                                        <th>{{ $proveedor->id }}</th>
                                        <td>{{ $proveedor->nombre }}</td>
                                        <td>{{ $proveedor->direccion }}</td>
                                        <td>{{ $proveedor->correo }}</td>
                                        <td>{{ $proveedor->telefono }}</td>
                                        <td>{{ $proveedor->deuda }}</td>
                                        <td>
                                            <button wire:click='editar({{ $proveedor->id }})' type="button"
                                                class="btn btn-sm text-info">
                                                <i class="fa fa-edit"></i>
                                            </button>
                                            <button type="button" class="btn btn-sm text-danger"><i
                                                    class="fa fa-trash-alt"></i></button>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>

                        <div class="pagination pagination-sm m-0 float-right">
                            {{ $proveedores->links() }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
