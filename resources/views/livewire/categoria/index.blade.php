{{-- Le indicamos el titulo  --}}
@section('title', 'Categoria')

{{-- Le indicamos el titulo  --}}
@section('title', 'Categorias')
<div class="card">
    <div class="card-body">
        <div class="row">
            <div class="col-md-4" style="padding-bottom: 40px;">
                <a href="{{ asset("secciones") }}" class="text-secondary"><i class="fas fa-arrow-left"></i><em> Secciones</em></a>
                @include("livewire.categoria.$vista")
            </div>
            <br>
            <div class="col-md-8">
                @include('livewire.categoria.tabla')
            </div>
        </div>
    </div>
</div>


