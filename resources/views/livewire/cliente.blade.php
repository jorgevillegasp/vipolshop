
    <!-- Main content -->
    <div class="content">

        <div class="card">
            <!-- /.card-header -->
            <div class="card-body">
                <h3 class="text-center">LISTADO DE CLIENTES</h3>
                <div class="container">
                    <div class="row justify-content-center">
                        <a href="clientes/create" class="btn btn-primary mx-1">Agregar Cliente</a>
                        <a href="/clientes/reporte-pdf" target="_blank" class="btn btn-info">Reporte</a>
                    </div>
                </div>

                <table id="miDataTable" class="table table-striped">
                    <thead class="thead-plateada">
                        <tr>
                            <th>Cedula</th>
                            <th>Nombres</th>
                            <th>Correo</th>
                            <th>Numero Telefono</th>
                            <th>Edad</th>
                            <th>Opciones</th>
                        </tr>
                    </thead>

                    <tbody>

                        @for ($i = 0; $i < 15; $i++)
                            <tr>
                                <th>1316669991</th>
                                <td>Jorge washington Villegas Polanco</td>
                                <td>jorge@hotmail.com</td>
                                <td>0958963256 - 052649566</td>
                                <td>25</td>
                                <td>
                                    <a href="clientes/" class="btn btn-info"><i class="fa fa-edit"></i></a>
                                    <button type="button" class="btn btn-danger"><i class="fa fa-trash-alt"></i></button>
                                </td>
                            </tr>
                        @endfor


                    </tbody>
                </table>

            </div>
            <!-- /.card-body -->
        </div>
        <!-- /.card -->

        <!-- /.content -->
    </div>

