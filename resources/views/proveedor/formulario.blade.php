<form role="form">
    <div class="card-body">
        <div class="row">
            <div class="form-group col-md-4">
                <label for="exampleInputEmail1">RUC</label>
                <input type="text" class="form-control" id="documento" wire:model='ruc'>
                @error('ruc') {{ $message }} @enderror
            </div>
            <div class="form-group col-md-8">
                <label for="exampleInputEmail1">Nombre</label>
                <input type="text" class="form-control" id="nombre" wire:model='nombre'>
                @error('nombre') {{ $message }} @enderror
            </div>
        </div>
        <div class="row">
            <div class="form-group col-md-4">
                <label for="exampleInputEmail1">Telefono</label>
                <input type="text" class="form-control" id="numero_celular"  wire:model='telefono'>
                @error('telefono') {{ $message }} @enderror
            </div>
            <div class="form-group col-md-8">
                <label for="exampleInputEmail1">Direccion</label>
                <input type="text" class="form-control" id="direccion" wire:model='direccion'>
                @error('direccion') {{ $message }} @enderror
            </div>
        </div>
        <div class="row">
            <div class="form-group col-md-8">
                <label for="exampleInputEmail1">Correo Electronico </label>
                <input type="text" class="form-control" id="correo" wire:model='correo'>
                @error('correo') {{ $message }} @enderror
            </div>
            <div class="form-group col-md-4">
                <label for="exampleInputEmail1">Deuda </label>
                <input type="text" class="form-control" id="correo" wire:model='deuda'>
                @error('deuda') {{ $message }} @enderror
            </div>
        </div>
    </div>
    <!-- /.card-body -->
</form>
