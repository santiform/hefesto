@include('layouts.header')

<h2>Listado de informes</h2>

<div class="columnas">
    <div id="columna-1" class="tarjeta">
        <table class="responsive-table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Edificio</th>
                    <th>Familia</th>
                    <th>Equipo</th>
                    <th>Fecha</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($informes as $informe)
                    <tr>
                        <td>{{ $informe->id }}</td>
                        <td>{{ $informe->edificio }}</td>
                        <td>{{ $informe->familia }}</td>
                        <td>{{ $informe->ubicacion }}</td>
                        <td>{{ \Carbon\Carbon::parse($informe->created_at)->format('d/m/Y') }}</td>
                        <td >
                            <a href="{{ route('admin.informes.show', $informe->id) }}" class="btn btn-primary btn-sm">
                                <i class="fas fa-eye"></i> Ver
                            </a>
                            <a href="{{ route('operador.nuevo.informe', $informe->id) }}" class="btn btn-warning btn-sm">
                                <i class="fas fa-pen"></i> Editar
                            </a>
                            <form action="{{ route('operador.nuevo.informe', $informe->id) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('¿Estás seguro de eliminar este informe?')">
                                    <i class="fas fa-trash"></i> Eliminar
                                </button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

@include('layouts.footer')
