<div class="card">
    <!-- /.card-header -->
    <div class="card-body ">
        <h3 class="text-center">LISTADO DE FORMAS DE PAGOS</h3>
        <br>
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body table-responsive p-0">
                        <table class="table table-hover text-nowrap table-responsive-lg">
                            <thead class="thead-light">
                                <tr>
                                    <th>ID</th>
                                    <th>FORMA DE PAGO</th>
                                    <th>opciones</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($formaDePagos as $formaDePago)
                                    <tr>
                                        <th>{{ $formaDePago->id }}</th>
                                        <td>{{ $formaDePago->pago }}</td>
                                        <td class="p-0">
                                            <button wire:click='edit({{ $formaDePago->id }})' class="btn">
                                                <i class="pe-7s-pen pe-lg  text-info"></i>
                                            </button>
                                            <button wire:click='destroy({{ $formaDePago->id }})' class="btn fomrulario-eliminar">
                                                <i class="pe-7s-trash pe-lg  text-danger"></i>
                                            </button>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="card-footer clearfix">
        <div class="pagination pagination-sm m-0 float-right">
            {{ $formaDePagos->links() }}
        </div>
    </div>
</div>
