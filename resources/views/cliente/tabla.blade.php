<div class="card">
    <div class="card-body">
        <h3 class="text-center">LISTADO DE CLIENTES</h3>
        <div class="container">
            <div class="row justify-content-center">
                <button wire:click='agregar()' class="btn btn-primary mx-1">Agregar Cliente</button>
                <a href="/clientes/reporte-pdf" target="_blank" class="btn btn-info">Reporte</a>
            </div>
        </div>

        <table id="miDataTable" class="table table-striped">
            <thead class="thead-plateada">
                <tr>
                    <th>ID</th>
                    <th>Cedula</th>
                    <th>Nombres</th>
                    <th>Apellidos</th>
                    <th>Correo</th>
                    <th>Numero Telefono</th>
                    <th>Edad</th>
                    <th>Opciones</th>
                </tr>
            </thead>

            <tbody>

                @foreach ($clientes as $cliente)
                    <tr>
                        <th>{{ $cliente->id }}</th>
                        <td>{{ $cliente->cedula }}</td>
                        <td>{{ $cliente->nombre_primero }}</td>
                        <td>{{ $cliente->apellido_paterno }}</td>
                        <td>{{ $cliente->correo }}</td>
                        <td>{{ $cliente->telefono }}</td>
                        <td>{{ $cliente->fecha_nacimiento }}</td>
                        <td>
                            <button wire:click='editar' type="button" class="btn btn-info"><i
                                    class="fa fa-edit"></i></button>
                            <button wire:click='eliminar({{ $cliente->id }})' type="button" class="btn btn-danger"><i
                                    class="fa fa-trash-alt"></i></button>
                        </td>
                    </tr>
                    @endforeach


            </tbody>
        </table>
    </div>
</div>
