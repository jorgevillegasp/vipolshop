<div class="form-row">
    <div class="form-group col-md-6">
        <label for="inputEmail4">Email</label>
        <input type="email" class="form-control" id="inputEmail4">
    </div>
    <div class="form-group col-md-6">
        <label for="inputPassword4">Password</label>
        <input type="password" class="form-control" id="inputPassword4">
    </div>
</div>
<div class="form-group">
    <label for="inputAddress">Address</label>
    <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St">
</div>
<div class="form-group">
    <label for="inputAddress2">Address 2</label>
    <input type="text" class="form-control" id="inputAddress2" placeholder="Apartment, studio, or floor">
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
