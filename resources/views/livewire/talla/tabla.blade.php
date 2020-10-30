<div class="card">
    <!-- /.card-header -->
    <div class="card-body ">
        <h3 class="text-center">LISTADO DE TALLAS</h3>
        <br>
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body table-responsive p-0">
                        <table class="table table-hover text-nowrap table-responsive-lg">
                            <thead class="thead-light">
                                <tr>
                                    <th>ID</th>
                                    <th>TALLA</th>
                                    <th>opciones</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($tallas as $talla)
                                    <tr>
                                        <th>{{ $talla->id }}</th>
                                        <td>{{ $talla->talla }}</td>
                                        <td class="p-0">
                                            <button wire:click='edit({{ $talla->id }})' class="btn">
                                                <i class="pe-7s-pen pe-lg  text-info"></i>
                                            </button>
                                            <button wire:click='destroy({{ $talla->id }})' class="btn fomrulario-eliminar">
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
            {{ $tallas->links() }}
        </div>
    </div>
</div>
