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
            <div class="card">
                <div class="card-header border-0">
                    <h3 class="card-title">Products</h3>
                    <div class="card-tools">
                        <a href="#" class="btn btn-tool btn-sm">
                            <i class="fas fa-download"></i>
                        </a>
                        <a href="#" class="btn btn-tool btn-sm">
                            <i class="fas fa-bars"></i>
                        </a>
                    </div>
                </div>
                <div class="card-body table-responsive p-0">
                    <table class="table table-striped table-valign-middle">
                        <thead>
                            <tr>
                                <th>Product</th>
                                <th>Price</th>
                                <th>Sales</th>
                                <th>More</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>
                                    <img src="dist/img/default-150x150.png" alt="Product 1"
                                        class="img-circle img-size-32 mr-2">
                                    Some Product
                                </td>
                                <td>$13 USD</td>
                                <td>
                                    <small class="text-success mr-1">
                                        <i class="fas fa-arrow-up"></i>
                                        12%
                                    </small>
                                    12,000 Sold
                                </td>
                                <td>
                                    <a href="#" class="text-muted">
                                        <i class="fas fa-search"></i>
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <img src="dist/img/default-150x150.png" alt="Product 1"
                                        class="img-circle img-size-32 mr-2">
                                    Another Product
                                </td>
                                <td>$29 USD</td>
                                <td>
                                    <small class="text-warning mr-1">
                                        <i class="fas fa-arrow-down"></i>
                                        0.5%
                                    </small>
                                    123,234 Sold
                                </td>
                                <td>
                                    <a href="#" class="text-muted">
                                        <i class="fas fa-search"></i>
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <img src="dist/img/default-150x150.png" alt="Product 1"
                                        class="img-circle img-size-32 mr-2">
                                    Amazing Product
                                </td>
                                <td>$1,230 USD</td>
                                <td>
                                    <small class="text-danger mr-1">
                                        <i class="fas fa-arrow-down"></i>
                                        3%
                                    </small>
                                    198 Sold
                                </td>
                                <td>
                                    <a href="#" class="text-muted">
                                        <i class="fas fa-search"></i>
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <img src="dist/img/default-150x150.png" alt="Product 1"
                                        class="img-circle img-size-32 mr-2">
                                    Perfect Item
                                    <span class="badge bg-danger">NEW</span>
                                </td>
                                <td>$199 USD</td>
                                <td>
                                    <small class="text-success mr-1">
                                        <i class="fas fa-arrow-up"></i>
                                        63%
                                    </small>
                                    87 Sold
                                </td>
                                <td>
                                    <a href="#" class="text-muted">
                                        <i class="fas fa-search"></i>
                                    </a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <!-- /.card -->
        </div>

        <div class="row">
            <div class="col-12">
                <div class="card">
                    <!-- /.card-header -->
                    <div class="card-body table-responsive p-0">
                        <table class="table table-hover text-nowrap table-responsive-lg">
                            <thead class="thead-light">
                                <tr>
                                    <th>PRODUCTO</th>
                                    <th>PRECIO</th>
                                    <th>STOCK</th>
                                    <th>NOMBRE</th>
                                    <th>APELLIDO</th>
                                    <th>CORREO</th>
                                    <th>TELEFONO</th>
                                    <th>EDAD</th>
                                    <th>OPCIONES</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($productos as $producto)
                                    <tr>
                                        <th>
                                            <img class="img-circle img-size-32 mr-2" src="{{ $producto->imagen }}" width="30" height="200">
                                            {{ $producto->nombre }}
                                        </th>
                                        <td>$ {{ $producto->precio_venta }}</td>
                                        <td>{{ $producto->stock }}</td>
                                        <td>{{ $producto->color }}</td>
                                        <td>{{ $producto->precio_venta }}</td>
                                        <td>{{ $producto->stock }}</td>
                                        <td>
                                            <button wire:click='edit({{ $producto->id }})' class="btn">
                                                <i class="pe-7s-pen pe-lg  text-info"></i>
                                            </button>
                                            <button wire:click='destroy({{ $producto->id }})' class="btn">
                                                <i class="pe-7s-trash pe-lg  text-danger"></i>
                                            </button>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>

                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
            </div>
        </div>

        <div class="row">

            @foreach ($productos as $producto)
                <div class="col-md-3">
                    <div class="card" style="width: 18rem;">
                        <img class="rounded card-img-top" src="{{ $producto->imagen }}" width="30" height="200"
                            alt="...">
                        <div class="card-body">
                            <h5 class="card-title text-center">{{ $producto->nombre }}</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk
                                of
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
