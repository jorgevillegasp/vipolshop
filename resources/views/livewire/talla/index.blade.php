{{-- Le indicamos el titulo --}}
@section('title', 'Talla')

    <div class="row">
        <div class="card col-lg-9">
            <div class="card-body">
                <div class="row">
                    <div class="col-md-6" style="padding-bottom: 40px;">
                        <div>
                            @include('comun.alertas')
                        </div>
                        @include("livewire.talla.$vista")
                    </div>
                    <div class="col-md-6">
                        @include('livewire.talla.tabla')
                    </div>
                </div>
            </div>
        </div>
    </div>
