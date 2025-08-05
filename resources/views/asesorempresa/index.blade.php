@extends('layouts.app')
@section('title',"Asesores")
@section('content')

    <div class="container">
        <h1>Asesores Empresariales</h1>
        <div class="row">
            <div class="col-11">
            </div>
            <div class="col-1">
                <a class="btn btn-primary" href="{{route('asesorempresas.create')}}">Nuevo</a>
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
                            <th>EMPRESA</th>
                            <th></th>
                            <th></th>
                        </tr>
                    @foreach ($asesores as $asesor)
                        <tr>
                            <td>{{$asesor->id}}</td>
                            <td>{{$asesor->nombre}}</td>
                            <td>{{$asesor->app}}</td>
                            <td>{{$asesor->apm}}</td>
                            <td>{{$asesor->email}}</td>
                            <td>{{$asesor->telefono}}</td>
                            <td>{{$asesor->empresa->nombre}}</td>
                            <td><a class="btn btn-success" href="{{route('asesorempresas.edit',['asesorempresa'=>$asesor->id])}}">Modificar</a></td>
                            <td>
                                <form id="frm-borrar-{{$asesor->id}}" method="POST"  action="{{route('asesorempresas.destroy',['asesorempresa'=>$asesor->id])}}">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-danger" type="submit">Eliminar</button>
                                </form>
                            </td>
                        </tr>
                        <script type="module">
                            $("#frm-borrar-{{$asesor->id}}").submit(function(e){
                            //alert('SUBMIT OK');
                            e.preventDefault();

                            //////////////////////////////auth
                            Swal.fire({
                                title: "Estas seguro?",
                                text: "No se podrá revertir!",
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
