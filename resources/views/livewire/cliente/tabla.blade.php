<div class="card">
    <div class="card-body ">
        <h3 class="text-center">LISTADO DE CLIENTES</h3>
        <div class="container">
            <div class="row justify-content-center">
                <button wire:click='create' class="btn btn-primary mx-1">Agregar Cliente</button>
                <a href="/clientes/reporte-pdf" target="_blank" class="btn btn-info">Reporte</a>
            </div>
        </div>
        <br>

        <div class="row">
            <div class="col-12">
                <div class="card">
                    <!-- /.card-header -->
                    <div class="card-body table-responsive p-0">
                        <table class="table table-hover text-nowrap table-responsive-lg">
                            <thead class="thead-light">
                                <tr>
                                    <th>ID</th>
                                    <th>CEDULA</th>
                                    <th>SEXO</th>
                                    <th>NOMBRE</th>
                                    <th>APELLIDO</th>
                                    <th>CORREO</th>
                                    <th>TELEFONO</th>
                                    <th>EDAD</th>
                                    <th>OPCIONES</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($clientes as $cliente)
                                    <tr>
                                        <th>{{ $cliente->id }}</th>
                                        <td>{{ $cliente->cedula }}</td>
                                        <td>{{ $cliente->sexo }}</td>
                                        <td>{{ $cliente->nombre_primero }}</td>
                                        <td>{{ $cliente->apellido_paterno }}</td>
                                        <td>{{ $cliente->correo }}</td>
                                        <td>{{ $cliente->telefono }}</td>
                                        <td>{{ $cliente->fecha_nacimiento }}</td>
                                        <td>
                                            <button wire:click='edit({{ $cliente->id }})' class="btn">
                                                <i class="pe-7s-pen pe-lg  text-info"></i>
                                            </button>
                                            <button wire:click='destroy({{ $cliente->id }})' class="btn fomrulario-eliminar">
                                                <i class="pe-7s-trash pe-lg  text-danger"></i>
                                            </button>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>

                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
            </div>
        </div>
        {{ $clientes->links() }}
    </div>
</div>
