<div class="card">
    <!-- /.card-header -->
    <div class="card-body ">
        <h3 class="text-center">LISTADO DE COLORES</h3>
        <br>
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body table-responsive p-0">
                        <table class="table table-hover text-nowrap table-responsive-lg">
                            <thead class="thead-light">
                                <tr>
                                    <th>ID</th>
                                    <th>Color</th>
                                    <th>opciones</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($colores as $color)
                                    <tr>
                                        <th>{{ $color->id }}</th>
                                        <td>{{ $color->color }}</td>
                                        <td class="p-0">
                                            <button wire:click='edit({{ $color->id }})' class="btn">
                                                <i class="pe-7s-pen pe-lg  text-info"></i>
                                            </button>
                                            <button wire:click='destroy({{ $color->id }})' class="btn fomrulario-eliminar">
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
            {{ $colores->links() }}
        </div>
    </div>
</div>
