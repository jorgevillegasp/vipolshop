
<h2>listado de Tallas</h2>
<table class="table table-hover table-responsive">
    <thead>
        <tr>
            <th style="width: 10px">ID</th>
            <th style="width: 150px">talla</th>
            <th colspan="2">&nbsp;</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($tallas as $talla)
            <tr>
                <td>{{ $talla->id }}</td>
                <td>{{ $talla->talla }}</td>
                <td>
                    <button wire:click='edit({{ $talla->id }})' class="btn btn-info">
                        Editar
                    </button>
                </td>
                <td>
                    <button wire:click='destroy({{ $talla->id }})' class="btn btn-danger">
                        Eliminar
                    </button>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
{{ $tallas->links() }}