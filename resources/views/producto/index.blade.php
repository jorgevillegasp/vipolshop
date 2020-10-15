
@extends('adminlte::page')


@section('content')
<div class="content">

    <div class="card">
        <!-- /.card-header -->
        <div class="card-body ">
            <h3 class="text-center">LISTADO DE PRODUCTOS</h3>
            <div class="container">
                <div class="row justify-content-center">
                    <button type="button" class="btn btn-primary " data-toggle="modal"
                        data-target="#modalAgregarCliente">Agregar Producto</button>
                </div>
            </div>

            <!-- Modal -->
            <div class="modal fade" id="modalAgregarCliente" tabindex="-1" aria-labelledby="exampleModalLabel"
                aria-hidden="true">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">

                        <div class="modal-header">
                            <h5 class="modal-title text-center">Agregar Producto</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>

                        <div class="modal-body">
                            <div class="row">
                                <div class="form-group col-md-3">
                                    <label>Codigo</label>
                                    <input type="text" class="form-control" id="codigo">
                                </div>
                                <div class="form-group col-md-9">
                                    <label>Nombre del Producto</label>
                                    <input type="text" class="form-control" id="nombreProducto">
                                </div>
                            </div>
                            <div class="row">
                            </div>
                            <div class="row">
                                <div class="form-group col-md-4">
                                    <label>Proveedor</label>
                                    <input type="text" class="form-control" id="proveedor">
                                </div>
                                <div class="form-group col-md-4">
                                    <label>Precio de Compra</label>
                                    <input type="text" class="form-control" id="precioCompra">
                                </div>
                                <div class="form-group col-md-4">
                                    <label>Precio de Venta</label>
                                    <input type="text" class="form-control" id="PrecioVenta">
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group col-md-4">
                                    <label>Cantidad</label>
                                    <input type="text" class="form-control" id="">
                                </div>
                                <div class="form-group col-md-4">
                                    <label>Talla</label>
                                    <input type="text" class="form-control" id="">
                                </div>
                                <div class="form-group col-md-4">
                                    <label>Color</label>
                                    <input type="text" class="form-control" id="">
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group col-md-12">
                                    <label>Imagen</label>
                                    <input type="text" class="form-control" id="">
                                </div>
                            </div>


                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                            <button type="button" class="btn btn-primary">Guardar</button>
                        </div>
                    </div>
                </div>
            </div>

            <table id="miDataTable" class="table table-bordered table-striped">
                <thead>
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
@stop

@section('js')
 <script src="js/miDataTable.js"></script>
@stop


