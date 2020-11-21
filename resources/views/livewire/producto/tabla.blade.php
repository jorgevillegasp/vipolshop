<div class="content">
    <div class="card">
        <div class="card-body ">
            <div class="row">
                <div class="col-md-8">
                    <h2 class="d-inline mr-2 float-left">Listado de Productos</h2>
                    <button wire:click='create' class="btn btn-primary d-inline mb-2">Nuevo</button>
                </div>
                <div class="col-md-4">
                    @include('comun.search')
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class=" table-responsive p-0">
                        <table class="table table-hover table-responsive">
                            <thead class="">
                                <tr>
                                    <th>ID</th>
                                    <th>Producto</th>
                                    <th>Precio</th>
                                    <th>Categoria</th>
                                    <th>Seccion</th>
                                    <th>Estado</th>
                                    <th>Ventas</th>
                                    <th colspan="3">&nbsp;</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($productos as $producto)
                                    <tr>
                                        <th>{{ $producto->id }}</th>
                                        <td>{{ $producto->nombre }}</td>
                                        <td>{{ $producto->precio_venta }}</td>
                                        <td>{{ $producto->categoria }}</td>
                                        <td>{{ $producto->seccion }}</td>
                                        <td>
                                            @if ($producto->estado == '1')
                                            Habilitado
                                            @else
                                            Desabilitado
                                            @endif
                                        </td>
                                        <td>
                                            <small class="text-success mr-1">
                                                <i class="fas fa-arrow-up"></i>
                                                12%
                                            </small>
                                            12,000 Vendidos
                                        </td>
                                        <td>
                                            <button wire:click='edit({{ $producto->id }})' class="btn btn-info">
                                                Detalle
                                            </button>
                                        </td>
                                        <td>
                                            <button wire:click='edit({{ $producto->id }})' class="btn btn-primary">
                                                Editar
                                            </button>
                                        </td>
                                        <td>
                                            <button wire:click='destroy({{ $producto->id }})' class="btn btn-danger">
                                                Eliminar
                                            </button>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>

                        <div class="pagination pagination-sm m-0 float-right">
                            {{ $productos->links() }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



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
                            <img src="dist/img/default-150x150.png" alt="Product 1" class="img-circle img-size-32 mr-2">
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
                            <img src="dist/img/default-150x150.png" alt="Product 1" class="img-circle img-size-32 mr-2">
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
                            <img src="dist/img/default-150x150.png" alt="Product 1" class="img-circle img-size-32 mr-2">
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
                            <img src="dist/img/default-150x150.png" alt="Product 1" class="img-circle img-size-32 mr-2">
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
