<form method="POST" action="" enctype="multipart/form-data">
    {{ csrf_field() }}
    <div class="card-body">
        <div class="row">
            <div class="col-md-7">
                <div class="row">
                    <div class="form-group col-md-12">
                        <label for="exampleInputEmail1">Nombre</label>
                        <input type="text" class="form-control" wire:model='nombre'
                            onkeypress="return soloLetras(event)">
                        @error('nombre') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col-md-12">
                        <label>Talla</label>
                        <select wire:model="talla_id" class="form-control text-center">
                            <option value="Elegir" disabled="">--------- Elige un talla ---------</option>
                            @foreach ($tallas as $talla)
                                <option value="{{ $talla->id }}">
                                    {{ $talla->talla }}
                                </option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col-md-12">
                        <label>Color</label>
                        <select wire:model="color_id" class="form-control text-center">
                            <option value="Elegir" disabled="">--------- Elige un color ---------</option>
                            @foreach ($colores as $color)
                                <option value="{{ $color->id }}">
                                    {{ $color->color }}
                                </option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col-md-12">
                        <label for="exampleInputEmail1">Precio de Venta</label>
                        <input type="number" class="form-control" onkeypress="return soloNumeros(event)"
                            wire:model='precio_venta' id="precio_venta">
                        @error('precio_venta') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col-md-12">
                        <label for="exampleInputEmail1">Cantidad</label>
                        <input type="number" class="form-control" name="stock" wire:model='stock' id="stock">
                        @error('stock') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>
                </div>
            </div>
            <div class="col-md-5">
                <div class="row form-group col-md-12">
                    <label for="exampleInputEmail1">Imagen</label>
                    <input type="file" wire:model='imagen' accept="image/*">
                </div>
                <div class="row">
                    <div>
                        <div class="card ">
                            <div class="card-body ">
                                <div wire:loading wire:target="imagen" class="spinner-border text-info" role="status">
                                    <span class="sr-only">Cargando imagen...</span>
                                </div>
                                @if ($imagen)
                                    <span class="text-info">Vista Previa de la imagen :</span>
                                    <div class="imagen" style="width='150px'; height='200px';">
                                        <img src="{{ $imagen->temporaryUrl() }}" class="card-img-top" width="40"
                                            height="200">
                                    </div>
                                @endif
                            </div>
                        </div>
                    </div>
                    @error('imagen') <span class="text-danger">{{ $message }}</span> @enderror
                </div>
            </div>
        </div>

        @include('livewire.producto.formulario2')
    </div>
</form>
