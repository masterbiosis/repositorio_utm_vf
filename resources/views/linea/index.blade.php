@extends('layouts.app')
@section('content')

<div class="container">
    <div class="row">
        <div class="col-11">
            <h1>Carrera</h1>

        </div>
        <div class="col-1">
            <a class="btn btn-primary" href="{{route('lineas.create')}}">Nuevo</a>
        </div>

    </div>
    <div class="row">
        <div class="col">
            
          <table class="table table-striped">
            <tr>
                <td>ID</td>
                <td>Nombre</td>
                <td>Descripcion</td>
                <td>Programa</td>
                <td></td>
                <td></td>
            </tr>
            
            @foreach ( $lineas as $linea)
            <tr>
                <td>{{$linea->id}}</td>
                <td>{{$linea->nombre}}</td>
                <td>{{$linea->descripcion}}</td>
                <td>{{$linea->programa->nombre}}</td>
                <td><a class="btn btn-success" href="{{route('lineas.edit',['linea'=>$linea->id])}}">Modificar</a></td>
                <td>
                <form id="frm-borrar-{{$linea->id}}" method="POST" action="{{route('lineas.destroy',['linea'=>$linea->id])}}">
                @csrf
                @method('DELETE')
                <button class="btn btn-danger" type="submit">Eliminar</button>    
                </form>   
                </td>
            </tr>
            <script type="module">
                            $("#frm-borrar-{{$linea->id}}").submit(function(e){
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