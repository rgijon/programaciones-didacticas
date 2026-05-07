@extends('template')
@section('content')

<h1>Ciclos Formativos</h1>
<em>Gestión de Ciclos Formativos</em>
<br>
<a href="{{ route('ciclos.create')}}" class="btn btn-success mb-3">Nuevo ciclo</a>
<br>

<h4>Buscador de Ciclos</h4>
<hr>
<p>Búsqueda de Ciclos por nombre</p>
<form method="GET" action="{{route('ciclos.index')}}" class="mb-3">
        <input type="text" name="buscar" class="form-control" placeholder="Buscar ciclo" value="{{$buscar}}">
        <button class="btn btn-primary mt-2"> Buscar </button>
    </form>
<br>
<h4>Listado de ciclos</h4>
<hr>

@foreach ($ciclos as $ciclo)


    <p>
        {{ $ciclo->nombre}}
        <a href="{{route('ciclos.edit', $ciclo)}}">Editar ciclo</a>

        <form method="POST" action="{{route('ciclos.destroy', $ciclo)}}">
            @csrf
            @method('DELETE')
            <button class=”btn btn-danger brn-sm”
            onclick="return confirm('¿Seguro que desea eliminar este ciclo?')">
            Eliminar ciclo</button>
        </form>
        <br>
    </p>

@endforeach

{{ $ciclos->links()}}
@endsection




{{--CODIGO NUEVO
@extends('template')

@section('content')

<div class="container py-4">

    //Encabezado
    <div class="d-flex justify-content-between align-items-center mb-4">
        <div>
            <h1 class="fw-bold">Ciclos Formativos</h1>
            <p class="text-muted mb-0">
                Gestión de ciclos formativos
            </p>
        </div>

        <a href="{{ route('ciclos.create') }}" class="btn btn-success">
            <i class="bi bi-plus-lg"></i> Nuevo ciclo
        </a>
    </div>

    //Buscador
    <div class="card shadow-sm mb-4">
        <div class="card-body">
            <h4 class="mb-3">Buscar ciclos</h4>

            <form method="GET" action="{{ route('ciclos.index') }}">
                <div class="input-group">
                    <input
                        type="text"
                        name="buscar"
                        class="form-control"
                        placeholder="Buscar ciclo..."
                        value="{{ $buscar }}"
                    >

                    <button class="btn btn-primary">
                        <i class="bi bi-search"></i> Buscar
                    </button>
                    //Botón volver al listado completo
                    <a href="{{ route('ciclos.index')}}" class="btn btn-secondary">
                        Ver todos
                    </a>
                </div>
            </form>
        </div>
    </div>

    //Listado
    <div class="card shadow-sm">
        <div class="card-body">

            <h4 class="mb-4">Listado de ciclos</h4>

            @if($ciclos->count())

                <table class="table table-hover align-middle">
                    <thead class="table-light">
                        <tr>
                            <th>Nombre</th>
                            <th class="text-end">Acciones</th>
                        </tr>
                    </thead>

                    <tbody>
                        @foreach ($ciclos as $ciclo)
                            <tr>
                                <td>
                                    <strong>{{ $ciclo->nombre }}</strong>
                                </td>

                                <td class="text-end">

                                    <a href="{{ route('ciclos.edit', $ciclo) }}"
                                       class="btn btn-warning btn-sm">
                                        Editar
                                    </a>

                                    <form method="POST"
                                          action="{{ route('ciclos.destroy', $ciclo) }}"
                                          class="d-inline">

                                        @csrf
                                        @method('DELETE')

                                        <button
                                            type="submit"
                                            class="btn btn-danger btn-sm"
                                            onclick="return confirm('¿Seguro que desea eliminar este ciclo?')">

                                            Eliminar
                                        </button>
                                    </form>

                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>

                // Paginación
                <div class="mt-3">
                    {{ $ciclos->links() }}
                </div>

            @else

                <div class="alert alert-info">
                    No se encontraron ciclos formativos.
                </div>

            @endif

        </div>
    </div>

</div>

@endsection
--}}
