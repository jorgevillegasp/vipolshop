<form action="" method="">
    {{ csrf_field() }}
    <div class="card-body">
        <div class="row">
            <div class="form-group col-md-6">
                <label for="exampleInputEmail1">{{ 'Cedula' }}</label>
                <input type="text" class="form-control" name="cedula" wire:model='cedula' id="cedula">
                @error('cedula') {{ $message }} @enderror
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
                <input type="text" class="form-control" name="nombres" wire:model='nombre_primero' id="nombre_primero">
                @error('nombre_primero') {{ $message }} @enderror
            </div>

            <div class="form-group col-md-6">
                <label for="exampleInputEmail1">{{ 'Apellidos Completos' }}</label>
                <input type="text" class="form-control" name="apellidos" wire:model='apellid_paterno' id="apellido">
                @error('apellid_paterno') {{ $message }} @enderror
            </div>
        </div>



        <div class="row">
            <div class="form-group col-md-4">
                <label for="exampleInputEmail1">{{ 'Fecha de nacimiento' }}</label>
                <input type="text" class="form-control" name="fecha_nacimiento" wire:model='fecha_nacimiento' id="fecha_nacimiento">
                @error('fecha_nacimiento') {{ $message }} @enderror
            </div>
            <div class="form-group col-md-4">
                <label for="exampleInputEmail1">{{ 'Numero Celular' }}</label>
                <input type="text" class="form-control" name="numero_celular" wire:model='numero_celular' id="numero_celular">
                @error('numero_celular') {{ $message }} @enderror
            </div>
            <div class="form-group col-md-4">
                <label for="exampleInputEmail1">{{ 'Numero Convencional' }}</label>
                <input type="text" class="form-control" name="numero_convencional" wire:model="numero_convencional" id="numero_convencional">
                @error('numero_convencional') {{ $message }} @enderror
            </div>
        </div>

        <div class="row">
            <div class="form-group col-md-12">
                <label for="exampleInputEmail1">{{ 'Direccion' }}</label>
                <input type="text" class="form-control" name="direccion" wire:model="direccion" id="direccion">
                @error('direccion') {{ $message }} @enderror
            </div>
        </div>

        <div class="row">
            <div class="form-group col-md-12">
                <label for="exampleInputEmail1">{{ 'Correo Electronico' }}</label>
                <input type="email" class="form-control" name="correo" wire:model="correo" id="correo">
                @error('correo') {{ $message }} @enderror
            </div>
        </div>


    </div>

</form>
