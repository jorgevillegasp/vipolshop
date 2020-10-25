<div class="content">
    <div class="card">
        <!-- /.card-header -->
        <div class="card-body ">
            <h3 class="text-center">LISTADO DE PROVEEDORES</h3>
            <div class="container">
                <div class="row justify-content-center">
                    <button wire:click='' class="btn btn-primary mx-1">Nuevo</button>
                    <button wire:click='reporte' target="_blank" class="btn btn-info">Reporte</button>
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body table-responsive p-0">
                            <table class="table table-hover text-nowrap table-responsive-lg">
                                <thead class="thead-light">
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
                                                <button wire:click='editar({{ $proveedor->id }})' type="button" class="btn btn-info btn-sm">
                                                    <i class="fa fa-edit"></i>
                                                </button>
                                                <button type="button" class="btn btn-danger btn-sm"><i class="fa fa-trash-alt"></i></button>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="card-footer clearfix">
            <div class="pagination pagination-sm m-0 float-right">
                {{ $proveedores->links() }}
            </div>
        </div>
    </div>
</div>
