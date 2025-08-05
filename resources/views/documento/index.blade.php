@extends('layouts.app')
@section('title', 'Documentos')
@section('content')
<div class="container">
    <h1>Documentos</h1>
    
    <!-- Mostrar mensaje de éxito si existe -->
    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <div class="row">
        <div class="col-11"></div>
        <div class="col-1">
            <a class="btn btn-primary" href="{{ route('documentos.create') }}">Nuevo</a>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Título</th>
                        <th>Introducción</th>
                        <th>Resumen</th>
                        <th>Fecha de presentación</th>
                        <th>Alumno</th>
                        <th>Matrícula</th>
                        <th>Programa</th>
                        <th>Asesor externo</th>
                        <th>Director doc.</th>
                        <th>Líneas</th>
                        <th>PDF</th>
                        <th></th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($documentos as $documento)
                        <tr>
                            <td>{{ $documento->id }}</td>
                            <td>{{ $documento->titulo }}</td>
                            <td>{{ $documento->introduccion }}</td>
                            <td>{{ $documento->resumen }}</td>
                            <td>{{ $documento->fecha_presentacion }}</td>
                            <td>{{ $documento->alumno->nombre }} {{ $documento->alumno->apellidop }}</td>
                            <td>{{ $documento->alumno->matricula }}</td>
                            <td>{{ $documento->programa->nombre }}</td>
                            <td>{{ $documento->asesor->nombre }} {{ $documento->asesor->apellidop }}</td>
                            <td>{{ $documento->directortesi->nombre }} {{ $documento->directortesi->apellido }}</td>
                            <td>
                                <details>
                                    <summary>Ver</summary>
                                    <ul class="list-group">
                                        @if ($documento->lineas->isNotEmpty())
                                            @foreach ($documento->lineas as $linea)
                                                <li class="list-group-item">{{ $linea->nombre }}</li>
                                            @endforeach
                                        @else
                                            <li class="list-group-item">Sin líneas</li>
                                        @endif
                                    </ul>
                                </details>
                            </td>
                            <td>
                                @if ($documento->archivo_pdf)
                                    <a href="{{ asset('storage/' . $documento->archivo_pdf) }}" target="_blank">Ver PDF</a>
                                @else
                                    Sin PDF
                                @endif
                            </td>
                            <td>
                                <a class="btn btn-success" href="{{ route('documentos.edit', ['documento' => $documento->id]) }}">Modificar</a>
                            </td>
                            <td>
                                <form id="frm-borrar-{{ $documento->id }}" method="POST" action="{{ route('documentos.destroy', ['documento' => $documento->id]) }}">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-danger" type="submit">Eliminar</button>
                                </form>
                            </td>
                        </tr>
                        <script type="module">
                            $("#frm-borrar-{{ $documento->id }}").submit(function (e) {
                                e.preventDefault();
                                Swal.fire({
                                    title: "¿Estás seguro?",
                                    text: "¡No se podrá revertir!",
                                    icon: "warning",
                                    showCancelButton: true,
                                    confirmButtonColor: "#3085d6",
                                    cancelButtonColor: "#d33",
                                    confirmButtonText: "¡Sí, borrar!"
                                }).then((result) => {
                                    if (result.isConfirmed) {
                                        this.submit();
                                    }
                                });
                            });
                        </script>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection