@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12 mt-3">
                <h2>Alumnos</h2>
            </div>
            <div class="col mt-3">
                <table class="table table-striped">
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
                </table>
            </div>
        </div>
    </div>

@endsection
