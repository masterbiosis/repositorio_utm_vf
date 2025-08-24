@extends('layouts.app')
@section('css')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/2.3.3/css/dataTables.bootstrap5.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/responsive/3.0.6/css/responsive.bootstrap5.css">
@endsection
@section('title','Alumnos asignados')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12 mt-3">
                <h2>Alumnos Asignados</h2>
            </div>
            <div class="col mt-3">
                <div class="card">
                <div class="card-body">
                    <table id="directortesiAlumnos" class="table table-striped">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>MATRICULA</th>
                                <th>NOMBRE</th>
                                <th>AP. PATERNO</th>
                                <th>AP. MATERNO</th>
                                <th>CORREO</th>
                                <th>TELEFONO</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach ($alumnos as $alumno)
                            <tr>
                                <td>{{$alumno->id}}</td>
                                <td>{{$alumno->matricula}}</td>
                                <td>{{$alumno->nombre}}</td>
                                <td>{{$alumno->apellidop}}</td>
                                <td>{{$alumno->apellidom}}</td>
                                <td>{{$alumno->email}}</td>
                                <td>{{$alumno->telefono}}</td>
                                <td><a class="btn btn-success" href="{{route('alumnos.edit',['alumno'=>$alumno->id])}}">Habilitar</a></td>

                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
            </div>
        </div>
    </div>

@endsection

@section('js')
    <script src="https://code.jquery.com/jquery-3.7.1.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.3/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.datatables.net/2.3.3/js/dataTables.js"></script>
    <script src="https://cdn.datatables.net/2.3.3/js/dataTables.bootstrap5.js"></script>
    <script src="https://cdn.datatables.net/responsive/3.0.6/js/dataTables.responsive.js"></script>
    <script src="https://cdn.datatables.net/responsive/3.0.6/js/responsive.bootstrap5.js"></script>

    <script>
         new DataTable('#directortesiAlumnos',{
            responsive: true,
            language: {
                "decimal": "",
                "emptyTable": "No hay información",
                "info": "Mostrando _START_ a _END_ de _TOTAL_ Entradas",
                "infoEmpty": "Mostrando 0 to 0 of 0 Entradas",
                "infoFiltered": "(Filtrado de _MAX_ total entradas)",
                "infoPostFix": "",
                "thousands": ",",
                "lengthMenu": "Mostrar _MENU_ Entradas",
                "loadingRecords": "Cargando...",
                "processing": "Procesando...",
                "search": "Buscar:",
                "zeroRecords": "Sin resultados encontrados",
                "paginate": {
                    "first": "Primero",
                    "last": "Ultimo",
                    "next": "Siguiente",
                    "previous": "Anterior"
                }
            },
         });
    </script>
@endsection
