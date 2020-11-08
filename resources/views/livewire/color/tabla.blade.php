<h2>Listado de Colores</h2>
<table class="table table-hover table-responsive">
    <thead>
        <tr>
            <th style="width: 10px">ID</th>
            <th>Color</th>
            <th colspan="2">&nbsp;</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($colores as $color)
            <tr>
                <th>{{ $color->id }}</th>
                <td>{{ $color->color }}</td>
                <td>
                    <button wire:click='edit({{ $color->id }})' class="btn btn-info">
                        Editar
                    </button>
                </td>
                <td>
                    <button wire:click='destroy({{ $color->id }})' class="btn btn-danger">
                        Eliminar
                    </button>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
{{ $colores->links() }}
