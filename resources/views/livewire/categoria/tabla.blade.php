<div class="row justify-content-between">
    <div class="col-8">
        <h2>Listado de Categorias</h2>
    </div>
    <div class="col-4">
        @include('comun.search')
    </div>
</div>
<table class="table table-hover table-responsive">
    <thead>
        <tr>
            <th style="width: 10px">ID</th>
            <th>categoria</th>
            <th>Descripcion</th>
            <th>Estado</th>
            <th>Seccion</th>
            <th colspan="2">&nbsp;</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($categorias as $categoria)
            <tr>
                <td>{{ $categoria->id }}</td>
                <td>{{ $categoria->categoria }}</td>
                <td>{{ $categoria->descripcion }}</td>
                <td>
                    @if ($categoria->estado == '1')
                        Habilitado
                    @else
                        Desabilitado
                    @endif
                </td>
                <td>{{ $categoria->seccion }}</td>
                <td>
                    <button wire:click='edit({{ $categoria->id }})' class="btn btn-info">
                        Editar
                    </button>
                </td>
                <td>
                    <button wire:click='destroy({{ $categoria->id }})' class="btn btn-danger">
                        Eliminar
                    </button>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
{{ $categorias->links() }}
