<form method="" action="">
    {{ csrf_field() }}
    <div class="form-group">
        <label for="categoria">Categoria</label>
        <input wire:model="categoria" id="categoria" class="form-control" type="text" name="">
        @error('categoria') <span class="text-danger">{{ $message }}</span> @enderror
    </div>
    <div class="form-group">
        <label>Seccion</label>
        <select wire:model="seccion_id" class="form-control">
            <option value="Elegir" disabled="">--------- Elige una seccion ---------</option>
            @foreach ($secciones as $seccion)
                <option value="{{ $seccion->id }}">
                    {{ $seccion->seccion }}
                </option>
            @endforeach
        </select>
        <a href="{{ asset("secciones") }}" class="text-secondary"><em>Desea agregar una nueva seccion?</em></a>
    </div>
    <div class="form-group">
        <label>Descripcion</label>
        <textarea class="form-control" rows="3" wire:model="descripcion"></textarea>
        @error('descripcion') <span class="text-danger">{{ $message }}</span> @enderror
    </div>
    <div class="form-group clearfix">
        <label>Estado</label>
        <div class="icheck-primary d-inline d-block">
            <input type="radio" id="radioPrimary1" name="r1" value="1" wire:model="estado" checked>
            <label for="radioPrimary1">
                Habilitado
            </label>
        </div>
        <div class="icheck-primary d-inline d-block">
            <input type="radio" id="radioPrimary2" name="r1" value="0" wire:model="estado">
            <label for="radioPrimary2">
                Deshabilitado
            </label>
        </div>
    </div>
</form>
<div class="modal fade" id="modal-lg">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Nueva Seccion</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                @include('livewire.seccion.crear')
            </div>
            <div class="modal-footer justify-content-between">
                <button type="button" class="btn btn-default" data-dismiss="modal" >Close</button>
                <button type="button" class="btn btn-primary" wire:click='nuevaSeccion'>Guardar</button>
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!-- /.modal -->
@section('js')
    <script>
        $(function() {
            //Initialize Select2 Elements
            $('.select2bs4').select2({
                theme: 'bootstrap4'
            })
        })

    </script>
@endsection
