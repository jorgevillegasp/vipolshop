
@extends('adminlte::page')
@section('content')


    <!-- Content Header (Page header) -->
    <div class="content-header">
        <!--
      <div class="container-fluid">

        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Registro de paciente</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Registro de paciente</li>
            </ol>
          </div>
        </div>

      </div>
      -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">

        <div class="card">
            <!-- /.card-header -->
            <div class="card-body ">
                <h3 class="text-center">LISTADO DE PRODUCTOS</h3>
                <div class="container">
                    <div class="row justify-content-center">
                        <a href="/productos/agregar" class="btn btn-primary mx-1">Nuevo</a>
                        <button class="btn btn-info">Reporte</button>
                    </div>
                </div>

                <table id="tablaProductos" class="table table-striped">
                    <thead class="thead-plateada">
                        <tr>
                            <th>Codigo</th>
                            <th>Nombre</th>
                            <th>Proveedor</th>
                            <th>Talla</th>
                            <th>Color</th>
                            <th>Precio Compra</th>
                            <th>Precio Venta</th>
                            <th>Stock</th>
                            <th>Opciones</th>
                        </tr>
                    </thead>

                    <tbody>

                        @for ($i = 0; $i < 15; $i++)
                            <tr>
                                <th>{{ $i }}</th>
                                <td>Blusa</td>
                                <td>Clara Estefania</td>
                                <td>Smoll</td>
                                <td>negro</td>
                                <td>$10.00</td>
                                <td>$12.00</td>
                                <td>65</td>
                                <td>
                                    <button type="button" class="btn btn-info"><i class="fa fa-edit"></i></button>
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


    </div>
    <!-- /.content -->
@endsection

@section('script')

    <!-- DataTables -->
    <script src="../../plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="../../plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
    <script src="../../plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
    <script src="../../plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
    <script src="../../script/myDataTable.js"></script>

    <script>
        $(function() {
            $("#tablaProductos").DataTable({
                "responsive": true,
                "autoWidth": false,
                "language": idioma_espanol
            });
        });
        /*
         * Estos son los datos para que salgan en español las descripcciones del datatable
         * agregar en "language": idioma_espanol a cada datatable
         * para que salgan en modo español
         */
        var idioma_espanol = {
            "sProcessing": "Procesando...",
            "sLengthMenu": "Mostrar _MENU_ registros",
            "sZeroRecords": "No se encontraron resultados",
            "sEmptyTable": "Ningún dato disponible en esta tabla",
            "sInfo": "Mostrando registros del _START_ al _END_ de un total de _TOTAL_ registros",
            "sInfoEmpty": "Mostrando registros del 0 al 0 de un total de 0 registros",
            "sInfoFiltered": "(filtrado de un total de _MAX_ registros)",
            "sInfoPostFix": "",
            "sSearch": "Buscar:",
            "sUrl": "",
            "sInfoThousands": ",",
            "sLoadingRecords": "Cargando...",
            "oPaginate": {
                "sFirst": "Primero",
                "sLast": "Último",
                "sNext": "Siguiente",
                "sPrevious": "Anterior"
            },
            "oAria": {
                "sSortAscending": ": Activar para ordenar la columna de manera ascendente",
                "sSortDescending": ": Activar para ordenar la columna de manera descendente"
            },
            "buttons": {
                "copy": "Copiar",
                "colvis": "Visibilidad"
            }
        }

    </script>


@endsection
