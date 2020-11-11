{{-- Le indicamos el titulo  --}}
@section('title', 'Seccion')



<div class="card">
    <div class="card-body">
        <div class="row">
            <div class="col-md-4 " style="padding-bottom: 40px;">
                <div>
                    <a href="{{ asset("categorias") }}" class="text-secondary"><i class="fas fa-arrow-left"></i><em>  Categorias</em></a>
                </div>
                @include("livewire.seccion.$vista")
                <br/>
            </div>
            <br/>
            <div class="col-md-8">
                @include('livewire.seccion.tabla')
            </div>
        </div>
    </div>
</div>
