<h1>lista de Paciente</h1>

<table border="1">
    <thead>
        <tr>
            <th>Nombre</th>
            <th>Precio</th>
            <th>Stock</th>
            <th>Descripcion</th>
        <tr>
    <thead>
    <tbody>

        @forelse($Productos as $p)
        <tr>
            <td>{{ $p->Nombre }}</td>
            <td>{{ $p->Precio }}</td>
            <td>{{ $p->Stock }}</td>
            <td>{{ $p->Descripcion }}</td>
        </tr>
    @empty

        <tr>
            <td colspan="4"> No se encontraron registros ene le sistema. </td>
        </tr>
        @endforelse
    </tbody>
</table>