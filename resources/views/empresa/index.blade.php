@extends('layouts.app')
@section('content')

<div class="container">
    <div class="row">
        <div class="col-11">
            <h1>Carrera</h1>

        </div>
        <div class="col-1">
            <a class="btn btn-primary" href="{{route('empresas.create')}}">Nuevo</a>
        </div>

    </div>
    <div class="row">
        <div class="col">
            
          <table class="table table-striped">
            <tr>
                <td>ID</td>
                <td>Nombre</td>
                <td>Direccion</td>
                <td>Email</td>
                <td>Telefono</td>
                <td></td>
                <td></td>
            </tr>
            
            @foreach ($empresas as $empresa)
                        <tr>
                            <td>{{$empresa->id}}</td>
                            <td>{{$empresa->nombre}}</td>
                            <td>{{$empresa->direccion}}</td>
                            <td>{{$empresa->email}}</td>
                            <td>{{$empresa->telefono}}</td>
                            <td><a class="btn btn-success" href="{{route('empresas.edit',['empresa'=>$empresa->id])}}">Modificar</a></td>
                            <td>
                                <form id="frm-borrar-{{$empresa->id}}" method="POST"  action="{{route('empresas.destroy',['empresa'=>$empresa->id])}}">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-danger" type="submit">Eliminar</button>
                                </form>
                            </td>
                        </tr>
                        <script type="module">
                            $("#frm-borrar-{{$empresa->id}}").submit(function(e){
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