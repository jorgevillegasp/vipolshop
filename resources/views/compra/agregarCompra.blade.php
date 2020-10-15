@extends('adminlte::page')

@section('content')


    <!-- Content Header (Page header) -->
    <div class="content-header">
    </div>
    <!-- /.content-header -->


    <!-- Main content -->
    <div class="content">
        <div class="container-fluid">

            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Nuevo Compra</h3>
                </div>
                <!-- form start -->
                <form role="form">
                    <div class="card-body">
                        <!--
                        | TODO:
                        |   El input de proveedores tiene que hacer:
                        |   1. Buscar entre los proveedores que existen en la base de dastos.
                        |   2. Agregar nuevo proveedor, si no existe en la base de datos.
                        -->
                        <div class="form-group col-md-12">
                            <label>Proveedor</label>
                            <select class="form-control select2bs4" style="width: 100%;">
                                <option>Ximena Baque</option>
                                <option>Paulina Baque</option>
                                <option>Zoila Polanco</option>
                            </select>
                        </div>
                        <div class="row">
                            <div class="form-group col-md-2">
                                <label>Codigo</label>
                                <input type="text" class="form-control" id="codigo" disabled>
                            </div>
                            <div class="form-group col-md-4">
                                <label>Fecha de la factura</label>
                                <input type="text" class="form-control" data-inputmask-alias="datetime" data-inputmask-inputformat="dd/mm/yyyy" data-mask="" im-insert="false" _mstplaceholder="153322" placeholder="dd/mm/yyyy">
                            </div>
                            <div class="form-group col-md-4">
                                <label>Impuesto</label>
                                <div class="custom-control custom-checkbox">
                                    <input class="custom-control-input" type="checkbox" id="customCheckbox1" value="option1">
                                    <label for="customCheckbox1" class="custom-control-label" _msthash="5975060" _msttexthash="1139515">12% Impuesto</label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /.card-body -->

                    <!-- /.card -->
                    <div class="card border border-primary">
                        <div class="card-body">
                            <div class="row">
                                <!--
                                | TODO:
                                |   El input de producto tiene que hacer:
                                |   1. Buscar entre los productos que existen en la base de dastos.
                                |   2. Agregar nuevo producto, si no existe en la base de datos.
                                -->
                                <div class="form-group col-md-4">
                                    <label>Producto</label>
                                    <select class="form-control select2bs4" style="width: 100%;">
                                        <option>blusa negra</option>
                                        <option>blusa blanca</option>
                                        <option>pantalones</option>
                                    </select>
                                </div>
                                <div class="form-group col-md-2">
                                    <label>Cantidad</label>
                                    <input type="text" class="form-control">
                                </div>
                                <div class="form-group col-md-2">
                                    <label>Precio Compra</label>
                                    <input type="text" class="form-control">
                                </div>
                                <div class="form-group col-md-2">
                                    <label>Precio Venta</label>
                                    <input type="text" class="form-control">
                                </div>
                                <div class="col-md-2 text-center">
                                    <button type="button" class="btn btn-primary ">Agregar</button>
                                </div>
                            </div>

                            <table class="table table-striped table-responsive-md mt-3">
                                <thead class="thead-plateada">
                                  <tr>
                                    <th scope="col">Opciones</th>
                                    <th scope="col">Articulo</th>
                                    <th scope="col">Cantidad</th>
                                    <th scope="col">Precio Compra</th>
                                    <th scope="col">Precio Venta</th>
                                    <th scope="col">Subtotal </th>
                                  </tr>
                                </thead>
                                <tbody>
                                    @for ($i = 0; $i < 5; $i++)
                                        <tr>
                                            <th class="text-center"><button class="btn btn-danger "><i class="fa fa-times"></i></button></th>
                                            <td>Blusa</td>
                                            <td>6</td>
                                            <td>$8.00</td>
                                            <td>$10.00</td>
                                            <td>$48.00</td>
                                      </tr>
                                    @endfor
                                    <tr>
                                        <th class="text-center">TOTAL</th>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <th>$250.00</th>
                                    </tr>
                                </tbody>
                              </table>
                        </div>
                    </div>
                    <!-- /.card -->
                </form>
                <!-- /.card-body -->
                <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Guardar</button>
                    <button type="button" class="btn btn-danger">Cancelar</button>
                </div>
                <!-- /.card-footer -->
            </div>
            <!-- /.card -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
@endsection

@section('script')
<script>
    $(function () {
      //Initialize Select2 Elements
      $('.select2bs4').select2({
        theme: 'bootstrap4'
      })
    })
  </script>
@endsection
