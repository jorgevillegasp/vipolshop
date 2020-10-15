@extends('adminlte::page')

@section('content')


<!-- Main content -->
<div class="content">
    <div class="card">
        <!-- /.card-header -->
        <div class="card-body ">
            <h3 class="text-center">LISTADO DE COMPRAS</h3>
            <div class="container">
                <div class="row justify-content-center">
                    <a href="/compras/agregar" class="btn btn-primary">Agregar Compra</a>
                </div>
            </div>

            <table id="miDataTable" class="table table-striped">
                <thead class="thead-plateada">
                    <tr>
                        <th>Fecha</th>
                        <th>Proveedor</th>
                        <th>Comprovante</th> <!-- Codigo de factura -->
                        <th>IVA</th>
                        <th>Total</th>
                        <th>Opciones</th>
                    </tr>
                </thead>
                <tbody>
                    @for ($i = 1; $i < 25; $i++)
                        <tr>
                            <td>2020-09-08 19:30 </td>
                            <td>Paulina Baque</td>
                            <td>Factura : {{ $i * 555 - $i }}</td>
                            <td>${{ $i * 3 }}.00</td>
                            <td>${{ $i * 5 }}.00</td>
                            <td>
                                <button type="button" class="btn btn-primary">Detalles</button>
                                <button type="button" class="btn btn-info">Editar</button>
                                <button type="button" class="btn btn-danger">Eliminar</button>
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



@section('js')
 <script src="js/miDataTable.js"></script>
@stop


