@extends('layouts.app')
@section('content')

    <div class="container">
        <h1>Programas Educativos</h1>
        <div class="row">
            <div class="col-11">
            </div>
            <div class="col-1">
                <a class="btn btn-primary" href="{{route('programas.create')}}">Nuevo</a>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <table class="table table-striped">
                        <tr>
                            <td>ID</td>
                            <td>NOMBRE</td>
                            <th>CARRERA</th>
                            <td></td>
                            <td></td>
                        </tr>
                    @foreach ($programas as $programa)
                        <tr>
                            <td>{{$programa->id}}</td>
                            <td>{{$programa->nombre}}</td>
                            <td>{{$programa->carrera->nombre}}</td>
                            <td><a class="btn btn-success" href="{{route('programas.edit',['programa'=>$programa->id])}}">Modificar</a></td>
                            <td>
                                <form id="frm-borrar-{{$programa->id}}" method="POST"  action="{{route('programas.destroy',['programa'=>$programa->id])}}">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-danger" type="submit">Eliminar</button>
                                </form>
                            </td>
                        </tr>
                        <script type="module">
                            $("#frm-borrar-{{$programa->id}}").submit(function(e){
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
