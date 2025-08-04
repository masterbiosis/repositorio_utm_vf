@extends('layouts.app')
@section('content')

<div class="container">
    <div class="row">
        <div class="col-11">
            <h1>Direcotr de Tesis</h1>

        </div>
        <div class="col-1">
            <a class="btn btn-primary" href="{{route('directortesis.create')}}">Nuevo</a>
        </div>

    </div>
    <div class="row">
        <div class="col">
            
          <table class="table table-striped">
            <tr>
                <td>ID</td>
                <td>Nombre</td>
                <td>Apellido Paterno</td>
                <td>Apellido Materno</td>
                <td>Email</td>
                <td>Telefono</td>
                <td></td>
                <td></td>
            </tr>
            
            @foreach ( $directortesis as $directortesi)
            <tr>
                <td>{{$directortesi->id}}</td>
                <td>{{$directortesi->nombre}}</td>
                <td>{{$directortesi->apellidop}}</td>
                <td>{{$directortesi->apellidom}}</td>
                <td>{{$directortesi->email}}</td>
                <td>{{$directortesi->telefono}}</td>
                <td><a class="btn btn-success" href="{{route('directortesis.edit',['directortesi'=>$directortesi->id])}}">Modificar</a></td>
                <td>
                <form id="frm-borrar-{{$directortesi->id}}" method="POST" action="{{route('directortesis.destroy',['directortesi'=>$directortesi->id])}}">
                @csrf
                @method('DELETE')
                <button class="btn btn-danger" type="submit">Eliminar</button>    
                </form>   
                </td>
            </tr>
            <script type="module">
                            $("#frm-borrar-{{$directortesi->id}}").submit(function(e){
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