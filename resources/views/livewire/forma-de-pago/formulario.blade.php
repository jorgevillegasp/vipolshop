<form role="form">
    {{ csrf_field() }}
    <div class="card-body">
        <div class="row">
            <div class="form-group col-md-12">
                <label for="exampleInputEmail1">Forma de pago :</label>
                <input type="text" class="form-control" id="documento" wire:model='pago'>
                @error('pago') <span class="text-danger">{{ $message }}</span> @enderror
            </div>
        </div>
    </div>
    <!-- /.card-body -->
</form>

