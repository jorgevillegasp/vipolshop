
<h2>listado de Secciones</h2>
<table class="table table-hover table-responsive">
    <thead>
        <tr>
            <th style="width: 10px">ID</th>
            <th>Seccion</th>
            <th>Descripcion</th>
            <th colspan="2">&nbsp;</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($secciones as $seccion)
            <tr>
                <td>{{ $seccion->id }}</td>
                <td>{{ $seccion->seccion }}</td>
                <td>{{ $seccion->descripcion }}</td>
                <td>
                    <button wire:click='edit({{ $seccion->id }})' class="btn btn-info">
                        Editar
                    </button>
                </td>
                <td>
                    <button wire:click='destroy({{ $seccion->id }})' class="btn btn-danger">
                        Eliminar
                    </button>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
{{ $secciones->links() }}
