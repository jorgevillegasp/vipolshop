<form method="" action="">
    {{ csrf_field() }}
    <div class="form-group">
        <label for="categoria">Categoria</label>
        <input wire:model="categoria" id="categoria" class="form-control" type="text" name="">
        @error('categoria') <span class="text-danger">{{ $message }}</span> @enderror
    </div>
    <div class="form-group">
        <label>Seccion</label>
        <select wire:model="seccion_id" class="form-control select2bs4">
            <option value="Elegir" disabled="">--------- Elige una seccion ---------</option>
            @foreach ($secciones as $seccion)
                <option value="{{ $seccion->id }}">
                    {{ $seccion->seccion }}
                </option>
            @endforeach
        </select>
    </div>
    <div class="form-group">
        <label>Descripcion</label>
        <textarea class="form-control"rows="3" wire:model="descripcion"></textarea>
        @error('descripcion') <span class="text-danger">{{ $message }}</span> @enderror
    </div>
    <div class="form-group">
        <label>Estado</label>
        <select wire:model="estado" class="form-control text-center select2bs4">
            <option value="Elegir" disabled>--------- Elige un estado ---------</option>
            <option value="1">Habilitado</option>
            <option value="0">Deshabilitado</option>
        </select>
    </div>
</form>

@section('js')
<script>
    $(function () {
      //Initialize Select2 Elements
      $('.select2bs4').select2({
        theme: 'bootstrap4'
      })
    })
  </script>
@endsection
