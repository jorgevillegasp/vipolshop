{{-- Le indicamos el titulo --}}
@section('title', 'Colores')
<div class="row">
    <div class="card col-md-8">
    <div class="card-body">
        <div class="row">
            <div class="col-md-6" style="padding-bottom: 40px;">
                <div>
                    @include('comun.alertas')
                </div>
                @include("livewire.color.$vista")
            </div>
            <br> 
                  
            <div class="col-md-6">
                @include('livewire.color.tabla')
            </div>
        </div>
    </div>
</div>



