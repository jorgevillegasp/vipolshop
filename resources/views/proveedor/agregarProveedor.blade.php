@extends('adminlte::page')

@section('content')


    <!-- Main content -->
    <div class="content">
        <div class="container-fluid">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Nuevo Proveedor</h3>
                </div>
                <!-- form start -->
                <form role="form">
                    <div class="card-body">
                        <div class="row">
                            <div class="form-group col-md-2">
                                <label for="exampleInputEmail1">Documento</label>
                                <input type="text" class="form-control" id="documento" placeholder="RUC">
                            </div>
                            <div class="form-group col-md-10">
                                <label for="exampleInputEmail1">Nombre</label>
                                <input type="text" class="form-control" id="nombre" placeholder="">
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-md-4">
                                <label for="exampleInputEmail1">Fecha de nacimiento</label>
                                <input type="text" class="form-control" id="fecha_nacimiento" placeholder="">
                            </div>
                            <div class="form-group col-md-4">
                                <label for="exampleInputEmail1">Numero Celular</label>
                                <input type="text" class="form-control" id="numero_celular" placeholder="">
                            </div>
                            <div class="form-group col-md-4">
                                <label for="exampleInputEmail1">Numero Convencional</label>
                                <input type="text" class="form-control" id="numero_convencional" placeholder="">
                            </div>
                        </div>

                        <div class="row">
                            <div class="form-group col-md-12">
                                <label for="exampleInputEmail1">Direccion</label>
                                <input type="text" class="form-control" id="direccion" placeholder="">
                            </div>
                        </div>

                        <div class="row">
                            <div class="form-group col-md-12">
                                <label for="exampleInputEmail1">Correo Electronico </label>
                                <input type="text" class="form-control" id="correo" placeholder="">
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-md-12">
                                <label for="exampleInputEmail1">Deuda </label>
                                <input type="text" class="form-control" id="correo" placeholder="Si al nuevo proveedor se le debe dinero ingresar un numero caso contrario sera 0">
                            </div>
                        </div>
                    </div>
                    <!-- /.card-body -->
                </form>
                <!-- /.card-body -->
                <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Guardar</button>
                    <a href="/proveedores" class="btn btn-danger">Cancelar</a>
                </div>
                <!-- /.card-footer -->
            </div>
            <!-- /.card -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
@endsection
