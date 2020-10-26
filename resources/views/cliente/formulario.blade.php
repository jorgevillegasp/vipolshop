<form action="" method="">
    {{ csrf_field() }}
    <div class="card-body">
        <div class="row">
            <div class="form-group col-md-6">
                <label for="exampleInputEmail1">{{ 'Cedula' }}</label>
                <input type="text" class="form-control" name="cedula" id="cedula" placeholder="Ej : 1302589635">
            </div>

            <div class="form-group col-md-6">
                <label>{{ 'Sexo' }}</label>
                <select class="form-control select2" name="sexo" id="Sexo" style="width: 100%;">
                    <option>Masculino</option>
                    <option>Femenino</option>
                </select>
            </div>
        </div>

        <div class="row">
            <div class="form-group col-md-6">
                <label for="exampleInputEmail1">{{ 'Nombres Completos' }}</label>
                <input type="text" class="form-control" name="nombres" id="nombre"
                    placeholder="Ej : Jorge Washington">
            </div>

            <div class="form-group col-md-6">
                <label for="exampleInputEmail1">{{ 'Apellidos Completos' }}</label>
                <input type="text" class="form-control" name="apellidos" id="apellido"
                    placeholder="Ej : Villegas Polanco">
            </div>
        </div>



        <div class="row">
            <div class="form-group col-md-4">
                <label for="exampleInputEmail1">{{ 'Fecha de nacimiento' }}</label>
                <input type="text" class="form-control" name="fecha_nacimiento" id="fecha_nacimiento"
                    placeholder="Ej :  01-05-1995">
            </div>
            <div class="form-group col-md-4">
                <label for="exampleInputEmail1">{{ 'Numero Celular' }}</label>
                <input type="text" class="form-control" name="numero_celular" id="numero_celular"
                    placeholder="Ej :  098563245">
            </div>
            <div class="form-group col-md-4">
                <label for="exampleInputEmail1">{{ 'Numero Convencional' }}</label>
                <input type="text" class="form-control" name="numero_convencional" id="numero_convencional"
                    placeholder="Ej :  052649566">
            </div>
        </div>

        <div class="row">
            <div class="form-group col-md-12">
                <label for="exampleInputEmail1">{{ 'Direccion' }}</label>
                <input type="text" class="form-control" name="Direccion" id="Direccion"
                    placeholder="Ej :  9 de octumbre entre olmedo y rocafuerte">
            </div>
        </div>

        <div class="row">
            <div class="form-group col-md-12">
                <label for="exampleInputEmail1">{{ 'Correo Electronico' }}</label>
                <input type="email" class="form-control" name="correo" id="correo"
                    placeholder="Ej :  jorge@hotmail.com">
            </div>
        </div>


    </div>

</form>