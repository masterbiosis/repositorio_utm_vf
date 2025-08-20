@extends('layouts.app')
@section('title',"Asignacion")
@section('content')
    <div class="container">
        <form action="{{route('admin.asignardata')}}" method="POST">
        @csrf
        <div class="row">
            <div class="col">
                <p>Directores de Tesis</p>
                <div class="caja">
                        <div class="mb-3">
                            <select name="directortesi" id="directortesi" class="form-select">
                                @foreach($directortesis as $directortesi)
                                    <option value="{{$directortesi->id}}">
                                        {{$directortesi->nombre }}
                                        {{$directortesi->apellidop}}
                                        {{$directortesi->apellidom}}
                                    </option>
                                @endforeach
                            </select>
                        </div>

                    </div>
                </div>
                <div class="col">
                    <p>Alumnos de Postgrado</p>
                    <div class="mb-3">
                        @foreach($alumnos as $alumno)
                        <div class="form-check">
                            <input
                            name="estudiante[]"
                            value="{{$alumno->id}}"
                            class="form-check-input"
                            type="checkbox"
                            id="alumno{{$alumno->id}}">
                            {{$alumno->matricula}}
                                {{$alumno->nombre }}
                                {{$alumno->apellidop}}
                                {{$alumno->apellidom}}
                        </div>
                        @endforeach
                    </div>

                </div>
                <div class="row">
                    <div class="col">
                        <div class="mb-3">
                            <button type="submit" class="btn btn-primary">Asignar</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
