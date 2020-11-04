<div class="card">
    <div class="card-body ">
        <h3 class="text-center">LISTADO DE PRODUCTOS</h3>
        <div class="container">
            <div class="row justify-content-center">
                <button wire:click='doAction(2)' class="btn btn-primary mx-1">Agregar producto</button>
                <a href="/productos/reporte-pdf" target="_blank" class="btn btn-info">Reporte</a>
            </div>
        </div>
        <br>

        <div class="row">
            
                @foreach ($productos as $producto)
                <div class="col-md-3">
                <div class="card" style="width: 18rem;">
                    <img class="rounded card-img-top" src="{{ $producto->imagen }}" width="30" height="200" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">{{ $producto->nombre }}</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of
                            the
                            card's content.</p>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">{{ $producto->nombre }}</li>
                        <li class="list-group-item">{{ $producto->talla }}</li>
                        <li class="list-group-item">{{ $producto->color }}</li>
                        <li class="list-group-item">{{ $producto->precio_venta }}</li>
                        <li class="list-group-item">{{ $producto->stock }}</li>
                    </ul>
                    <div class="card-body">
                        <button wire:click='edit({{ $producto->id }})' class="btn">
                            <i class="pe-7s-pen pe-lg  text-info"></i>
                        </button>
                        <button wire:click='destroy({{ $producto->id }})' class="btn">
                            <i class="pe-7s-trash pe-lg  text-danger"></i>
                        </button>
                    </div>
                </div>
                
            </div>
            @endforeach
        </div>
        {{ $productos->links() }}
    </div>
</div>
