@extends('adminlte::page')



@section('content')

    <!-- Main content -->
    <div class="content">

        <div class="card">
            <!-- /.card-header -->
            <div class="card-body ">
                <h3 class="text-center">LISTADO DE PROVEEDORES</h3>
                <div class="container">
                    <div class="row justify-content-center">
                        <a href="/proveedores/agregar" class="btn btn-primary mx-1">Nuevo</a>
                        <a href="/proveedores/reporte-pdf" target="_blank" class="btn btn-info">Reporte</a>
                    </div>
                </div>

                <table id="miDataTable" class="table table-striped">
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


@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">

    <link rel="stylesheet" href="path/to/pe-icon-7-stroke/css/pe-icon-7-stroke.css">

<!-- Optional - Adds useful class to manipulate icon font display -->
<link rel="stylesheet" href="path/to/pe-icon-7-stroke/css/helper.css">
@stop

@section('js')


@section('js')
 <script src="js/miDataTable.js"></script>
@stop



