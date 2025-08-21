@extends('layouts.app')
@section('css')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/2.3.3/css/dataTables.bootstrap5.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/responsive/3.0.6/css/responsive.bootstrap5.css">
@endsection
@section('title','Programa Educativo')
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
                <div class="card">
                    <div class="card-body">
                        <table id="programatbl" class="table table-striped">
                            <thead>
                                <tr>
                                    <td>ID</td>
                                    <td>NOMBRE</td>
                                    <th>CARRERA</th>
                                    <td></td>
                                    <td></td>
                                </tr>
                            </thead>
                            <tbody>
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
         new DataTable('#programatbl',{
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
