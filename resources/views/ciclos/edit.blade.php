@extends('template')
@section('content')

<h1>Editar ciclo</h1>

  <!-- Muestra error en vista -->
@if ($errors->any())
	<div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
	</div>
@endif

<form method="POST" action="{{route('ciclos.update',$ciclo)}}">
@csrf
@method('PUT')

    <div class="mb-3">
        <label>Nombre</label>
        <input
            class="form-control @error('nombre') is-invalid @enderror"
            name="nombre"
            value="{{ old('nombre', $ciclo->nombre) }}"
        >
        @error('nombre')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>

    <div class="mb-3">
        <label>Familia Profesional</label>
        <input
            class="form-control @error('familia_profesional') is-invalid @enderror"
            name="familia_profesional"
            value="{{ old('familia_profesional', $ciclo->familia_profesional) }}"
        >
        @error('familia_profesional')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>

    <div class="mb-3">
        <label>Grado</label>
        <input
            class="form-control @error('grado') is-invalid @enderror"
            name="grado"
            value="{{ old('grado',$ciclo->grado) }}"
        >
        @error('grado')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>

    <div class="mb-3">
        <label>Modalidad</label>
        <input
            class="form-control @error('modalidad') is-invalid @enderror"
            name="modalidad"
            value="{{ old('modalidad',$ciclo->modalidad) }}"
        >
        @error('modalidad')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>

    <div class="mb-3">
        <label>Decreto</label>
        <input
            class="form-control @error('decreto_referencia') is-invalid @enderror"
            name="decreto_referencia"
            value="{{ old('decreto_referencia',$ciclo->decreto_referencia) }}"
        >
        @error('decreto_referencia')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>

    <button class="btn btn-primary">Actulizar</button>

    <a href="{{route('ciclos.index')}}" class="btn btn-secondary">
        Cancelar
    </a>
</form>

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
    </div>

    //Muestra error en vista
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    //Editar Ciclo
    <div class="card shadow-sm mb-4">
        <div class="card-body">
            <h4 class="mb-3">Editar Ciclo</h4>

            <form method="POST" action="{{route('ciclos.update',$ciclo)}}">
                @csrf
                @method('PUT')

                    <div class="mb-3">
                        <label>Nombre</label>
                        <input
                            class="form-control @error('nombre') is-invalid @enderror"
                            name="nombre"
                            value="{{ old('nombre', $ciclo->nombre) }}"
                        >
                        @error('nombre')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label>Familia Profesional</label>
                        <input
                            class="form-control @error('familia_profesional') is-invalid @enderror"
                            name="familia_profesional"
                            value="{{ old('familia_profesional', $ciclo->familia_profesional) }}"
                        >
                        @error('familia_profesional')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label>Grado</label>
                        <input
                            class="form-control @error('grado') is-invalid @enderror"
                            name="grado"
                            value="{{ old('grado',$ciclo->grado) }}"
                        >
                        @error('grado')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label>Modalidad</label>
                        <input
                            class="form-control @error('modalidad') is-invalid @enderror"
                            name="modalidad"
                            value="{{ old('modalidad',$ciclo->modalidad) }}"
                        >
                        @error('modalidad')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label>Decreto</label>
                        <input
                            class="form-control @error('decreto_referencia') is-invalid @enderror"
                            name="decreto_referencia"
                            value="{{ old('decreto_referencia',$ciclo->decreto_referencia) }}"
                        >
                        @error('decreto_referencia')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    //Botones

                    <button class="btn btn-primary">Actulizar</button>

                    <a href="{{route('ciclos.index')}}" class="btn btn-secondary">
                        Cancelar
                    </a>

            </form>
        </div>
    </div>

</div>

@endsection
--}}

