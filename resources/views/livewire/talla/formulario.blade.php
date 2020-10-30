<form role="form">
    {{ csrf_field() }}
    <div class="card-body">
        <div class="row">
            <div class="form-group col-md-12">
                <label for="exampleInputEmail1">Talla :</label>
                <input type="text" class="form-control" id="documento" wire:model='talla'>
                @error('talla') <span class="text-danger">{{ $message }}</span> @enderror
            </div>
        </div>
    </div>
    <!-- /.card-body -->
</form>

