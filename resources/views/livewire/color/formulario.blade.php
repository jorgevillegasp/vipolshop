<form role="form">
    {{ csrf_field() }}

        <div class="row">
            <div class="form-group col-md-12">
                <label for="exampleInputEmail1">Color :</label>
                <input type="text" class="form-control" id="documento" wire:model='color'>
                @error('color') <span class="text-danger">{{ $message }}</span> @enderror
            </div>
        </div>
</form>
