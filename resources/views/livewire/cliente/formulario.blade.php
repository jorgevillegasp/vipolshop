<form action="" method="">
    {{ csrf_field() }}
    <div class="card-body">
        <div class="row">
            <div class="form-group col-md-6">
                <label for="exampleInputEmail1">Cedula</label>
                <input type="text" class="form-control" name="cedula" wire:model='cedula' id="cedula">
                @error('cedula') <span class="text-danger">{{ $message }}</span> @enderror
            </div>

            <div class="form-group col-md-6">
                <label >Sexo</label>
                <select wire:model="sexo_id" class="form-control text-center">
                    <option value="Elegir" disabled="">--------- Elige un sexo ---------</option>
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
                    @error('nombre_primero') <span class="text-danger">{{ $message }}</span> @enderror
            </div>
            <div class="form-group col-md-3">
                <label for="exampleInputEmail1">Nombre 1</label>
                <input type="text" class="form-control" name="nombre_segundo" wire:model='nombre_segundo' id="nombre_segundo">
                    @error('nombre_segundo') <span class="text-danger">{{ $message }}</span> @enderror
            </div>



            <div class="form-group col-md-3">
                <label for="exampleInputEmail1">Apellido Paterno</label>
                <input type="text" class="form-control" name="apellido_paterno" wire:model='apellido_paterno' id="apellid_paterno">
                @error('apellido_paterno') <span class="text-danger">{{ $message }}</span> @enderror
            </div>
            <div class="form-group col-md-3">
                <label for="exampleInputEmail1">Apellido Materno</label>
                <input type="text" class="form-control" name="apellido_materno" wire:model='apellido_materno' id="apellido_materno">
                @error('apellido_materno') <span class="text-danger">{{ $message }}</span> @enderror
            </div>
        </div>



        <div class="row">
            <div class="form-group col-md-6">
                <label for="exampleInputEmail1">Fecha de nacimiento</label>
                <input type="text" class="form-control" name="fecha_nacimiento" wire:model='fecha_nacimiento' id="fecha_nacimiento">
                @error('fecha_nacimiento') <span class="text-danger">{{ $message }}</span> @enderror
            </div>
            <div class="form-group col-md-6">
                <label for="exampleInputEmail1">Telefono</label>
                <input type="text" class="form-control" name="telefono" wire:model='telefono' id="telefono">
                @error('telefono') <span class="text-danger">{{ $message }}</span> @enderror
            </div>
        </div>

        <div class="row">
            <div class="form-group col-md-6">
                <label for="exampleInputEmail1">Correo Electronico</label>
                <input type="correo" class="form-control" name="correo" wire:model="correo" id="correo">
                @error('correo') <span class="text-danger">{{ $message }}</span> @enderror
            </div>
            <div class="form-group col-md-6">
                <label for="exampleInputEmail1">Deuda</label>
                <input type="correo" class="form-control" name="deuda" wire:model="deuda" id="deuda">
                @error('deuda') <span class="text-danger">{{ $message }}</span> @enderror
            </div>
        </div>

        <div class="row">
            <div class="form-group col-md-12">
                <label for="exampleInputEmail1">Direccion</label>
                <input type="text" class="form-control" name="direccion" wire:model="direccion" id="direccion">
                @error('direccion') <span class="text-danger">{{ $message }}</span> @enderror
            </div>
        </div>

    </div>

</form>
