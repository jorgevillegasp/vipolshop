
{{-- Le indicamos el titulo  --}}
@section('title', 'Categorias')
<div class="card">
    <div class="card-body">
        <div class="row">
            <div class="col-md-4" style="padding-bottom: 40px;">
                @include("livewire.categoria.$vista")
            </div>
            <br>        
            <div class="col-md-8">
                @include('livewire.categoria.tabla')
            </div>
        </div>
    </div>
</div>


