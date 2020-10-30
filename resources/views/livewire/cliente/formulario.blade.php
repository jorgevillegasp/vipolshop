<form action="" method="">
    {{ csrf_field() }}
    <div class="card-body">
        <div class="row">
            <div class="form-group col-md-6">
                <label for="exampleInputEmail1">Cedula</label>
                <input type="text" class="form-control" name="cedula" wire:model='cedula' id="cedula">
                @error('cedula') {{ $message }} @enderror
            </div>

            <div class="form-group col-md-6">
                <label >Sexo</label>
                <select wire:model="sexo_id" class="form-control text-center">
                    <option value="Elegir" disabled="">Elegir</option>
                    @foreach($sexos as $sexo)
                        <option value="{{ $sexo->id }}">
                            {{ $sexo->sexo}}
                        </option>                                       
                    @endforeach                              
                </select>
            </div>
        </div>


        <div class="row">
            <div class="form-group col-md-3">
                <label for="exampleInputEmail1">Nombre 1</label>
                <input type="text" class="form-control" name="nombres_primero" wire:model='nombre_primero' id="nombre_primero">
                    @error('nombre_primero') {{ $message }} @enderror
            </div>
            <div class="form-group col-md-3">
                <label for="exampleInputEmail1">Nombre 1</label>
                <input type="text" class="form-control" name="nombre_segundo" wire:model='nombre_segundo' id="nombre_segundo">
                    @error('nombre_segundo') {{ $message }} @enderror
            </div>

            

            <div class="form-group col-md-3">
                <label for="exampleInputEmail1">Apellido Paterno</label>
                <input type="text" class="form-control" name="apellido_paterno" wire:model='apellido_paterno' id="apellid_paterno">
                @error('apellido_paterno') {{ $message }} @enderror
            </div>
            <div class="form-group col-md-3">
                <label for="exampleInputEmail1">Apellido Materno</label>
                <input type="text" class="form-control" name="apellido_materno" wire:model='apellido_materno' id="apellido_materno">
                @error('apellido_materno') {{ $message }} @enderror
            </div>
        </div>



        <div class="row">
            <div class="form-group col-md-6">
                <label for="exampleInputEmail1">Fecha de nacimiento</label>
                <input type="text" class="form-control" name="fecha_nacimiento" wire:model='fecha_nacimiento' id="fecha_nacimiento">
                @error('fecha_nacimiento') {{ $message }} @enderror
            </div>
            <div class="form-group col-md-6">
                <label for="exampleInputEmail1">Telefono</label>
                <input type="text" class="form-control" name="telefono" wire:model='telefono' id="telefono">
                @error('telefono') {{ $message }} @enderror
            </div>
        </div>

        <div class="row">
            <div class="form-group col-md-6">
                <label for="exampleInputEmail1">Correo Electronico</label>
                <input type="correo" class="form-control" name="correo" wire:model="correo" id="correo">
                @error('correo') {{ $message }} @enderror
            </div>
            <div class="form-group col-md-6">
                <label for="exampleInputEmail1">Deuda</label>
                <input type="correo" class="form-control" name="deuda" wire:model="deuda" id="deuda">
                @error('deuda') {{ $message }} @enderror
            </div>
        </div>
        
        <div class="row">
            <div class="form-group col-md-12">
                <label for="exampleInputEmail1">Direccion</label>
                <input type="text" class="form-control" name="direccion" wire:model="direccion" id="direccion">
                @error('direccion') {{ $message }} @enderror
            </div>
        </div>

        <div class="row">
            <div class="form-group col-md-12">
                <label>Minimal</label>
                <select class="form-control select2bs4" style="width: 100%;">
                  <option selected="selected">Alabama</option>
                  <option>Alaska</option>
                  <option>California</option>
                  <option>Delaware</option>
                  <option>Tennessee</option>
                  <option>Texas</option>
                  <option>Washington</option>
                </select>
              </div>
        </div>

    </div>

</form>
