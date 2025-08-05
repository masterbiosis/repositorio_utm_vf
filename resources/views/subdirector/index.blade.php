@extends('layouts.app')
@section('content')

    <div class="container">
        <h1>Director de Carrera</h1>
        <div class="row">
            <div class="col-11">
            </div>
            <div class="col-1">
                <a class="btn btn-primary" href="{{route('subdirector.create')}}">Nuevo</a>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <table class="table table-striped">
                        <tr>
                            <th>ID</th>
                            <th>NOMBRE</th>
                            <th>AP. PATERNO</th>
                            <th>AP. MATERNO</th>
                            <th>CORREO</th>
                            <th>TELEFONO</th>
                            <th>CARRERA</th>
                            <th></th>
                            <th></th>
                        </tr>
                    @foreach ($subdirectors as $subdirector)
                        <tr>
                            <td>{{$subdirector->id}}</td>
                            <td>{{$subdirector->nombre}}</td>
                            <td>{{$subdirector->apellidop}}</td>
                            <td>{{$subdirector->apellidom}}</td>
                            <td>{{$subdirector->email}}</td>
                            <td>{{$subdirector->telefono}}</td>
                            <td>{{$subdirector->carrera->nombre}}</td>
                            <td><a class="btn btn-success" href="{{route('subdirector.edit',['subdirector'=>$subdirector->id])}}">Modificar</a></td>
                            <td>
                                <form id="frm-borrar-{{$subdirector->id}}" method="POST"  action="{{route('subdirector.destroy',['subdirector'=>$subdirector->id])}}">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-danger" type="submit">Eliminar</button>
                                </form>
                            </td>
                        </tr>
                        <script type="module">
                            $("#frm-borrar-{{$subdirector->id}}").submit(function(e){
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