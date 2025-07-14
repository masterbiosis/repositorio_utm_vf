@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col">
                <form action="" id="form-delete">
                    <button>Eliminar</button>
                </form>
            </div>
        </div>
    </div>
@endsection


@section('js')
    <script type="module">
        $("button").click(function(){
            alert("Thanks");
        });

        $(document).ready(function(){
            $("#form-delete").submit(function(e){
                e.preventDefault();
                Swal.fire({
                    title: "Are you sure?",
                    text: "You won't be able to revert this!",
                    icon: "warning",
                    showCancelButton: true,
                    confirmButtonColor: "#3085d6",
                    cancelButtonColor: "#d33",
                    confirmButtonText: "Yes, delete it!"
                    }).then((result) => {
                    if (result.isConfirmed) {
                        Swal.fire({
                        title: "Deleted!",
                        text: "Your file has been deleted.",
                        icon: "success"
                        });
                    }
                });
            });
        });
    </script>
@endsection
