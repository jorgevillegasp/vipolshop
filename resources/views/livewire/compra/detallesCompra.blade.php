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
        <div class="container-fluid">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title"> Nuevo Producto</h3>
                </div>
                <!-- form start -->
                <form role="form">
                    <div class="card-body">
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
                    <!-- /.card-body -->
                </form>
                <!-- /.card-body -->
                <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Guardar</button>
                </div>
                <!-- /.card-footer -->


            </div>
            <!-- /.card -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
@endsection
