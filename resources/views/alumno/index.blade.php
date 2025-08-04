@extends('layouts.app')
@section('title','Alumno')
@section('content')

    <div class="container">
        <h1>Alumnos</h1>
        <div class="row">
            <div class="col-11">
            </div>
            <div class="col-1">
                <a class="btn btn-primary" href="{{route('alumnos.create')}}">Nuevo</a>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <table class="table table-striped">
                        <tr>
                            <th>ID</th>
                            <th>MATRICULA</th>
                            <th>NOMBRE</th>
                            <th>AP. PATERNO</th>
                            <th>AP. MATERNO</th>
                            <th>CORREO</th>
                            <th>TELEFONO</th>
                            <th>CONTRASEÑA</th>
                            <th></th>
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
                            <td>{{$alumno->password}}</td>
                            <td><a class="btn btn-success" href="{{route('alumnos.edit',['alumno'=>$alumno->id])}}">Modificar</a></td>
                            <td>
                                <form id="frm-borrar-{{$alumno->id}}" method="POST"  action="{{route('alumnos.destroy',['alumno'=>$alumno->id])}}">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-danger" type="submit">Eliminar</button>
                                </form>
                            </td>
                        </tr>
                        <script type="module">
                            $("#frm-borrar-{{$alumno->id}}").submit(function(e){
                            //alert('SUBMIT OK');
                            e.preventDefault();

                            //////////////////////////////auth
                            Swal.fire({
                                title: "Estas seguro?",
                                text: "No se podra revertir!",
                                icon: "warning",
                                showCancelButton: true,
                                confirmButtonColor: "#3085d6",
                                cancelButtonColor: "#d33",
                                confirmButtonText: "Si, borrar!"
                                }).then((result) => {
                                if (result.isConfirmed) {
                                    /*
                                    Swal.fire({
                                    title: "Deleted!",
                                    text: "Your file has been deleted.",
                                    icon: "success"
                                    });
                                    */
                                   this.submit();
                                }
                            });

                            /////////////////////////////auth

                        });//fin SUBMIT
                        </script>
                    @endforeach
                </table>
            </div>
        </div>
    </div>
@endsection
