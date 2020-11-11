<form method="" action="">
    {{ csrf_field() }}
    <div class="form-group">
        <label>Seccion</label>
        <input class="form-control" type="text" wire:model="seccion">
        @error('seccion') <span class="text-danger">{{ $message }}</span> @enderror
    </div>
    <div class="form-group">
        <label>Descripcion</label>
        <textarea class="form-control"rows="3" wire:model="descripcion"></textarea>
        @error('descripcion') <span class="text-danger">{{ $message }}</span> @enderror
    </div>
</form>
