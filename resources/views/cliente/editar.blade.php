<div class="card">
    <div class="card-body">
        <div class="card-header">
            <h3 class="card-title">Editar Cliente</h3>
        </div>

        <form role="form">
            <div class="card-body">


                <div class="row">
                    <div class="form-group col-md-6">
                        <label for="exampleInputEmail1">Cedula</label>
                        <input type="text" class="form-control" id="cedula">
                    </div>

                    <div class="form-group col-md-6">
                        <label>Sexo</label>
                        <select class="form-control select2" style="width: 100%;">
                            <option>Maculino</option>
                            <option>Femenino</option>
                        </select>
                    </div>
                </div>

                <div class="row">
                    <div class="form-group col-md-6">
                        <label for="exampleInputEmail1">Nombres Completos</label>
                        <input type="text" class="form-control" id="nombre">
                    </div>

                    <div class="form-group col-md-6">
                        <label for="exampleInputEmail1">Apellidos Completos</label>
                        <input type="text" class="form-control" id="apellido">
                    </div>
                </div>



                <div class="row">
                    <div class="form-group col-md-4">
                        <label for="exampleInputEmail1">Fecha de nacimiento</label>
                        <input type="text" class="form-control" id="fecha_nacimiento">
                    </div>
                    <div class="form-group col-md-4">
                        <label for="exampleInputEmail1">Numero Celular</label>
                        <input type="text" class="form-control" id="numero_celular">
                    </div>
                    <div class="form-group col-md-4">
                        <label for="exampleInputEmail1">Numero Convencional</label>
                        <input type="text" class="form-control" id="numero_convencional">
                    </div>
                </div>

                <div class="row">
                    <div class="form-group col-md-12">
                        <label for="exampleInputEmail1">Direccion</label>
                        <input type="text" class="form-control" id="direccion">
                    </div>
                </div>

                <div class="row">
                    <div class="form-group col-md-12">
                        <label for="exampleInputEmail1">Correo Electronico </label>
                        <input type="email" class="form-control" id="correo">
                    </div>
                </div>


            </div>
            <!-- /.card-body -->
            <div class="card-footer">
                <button wire:click='show' type="button" class="btn btn-primary">Guardar</button>
            </div>

        </form>
    </div>
</div>
