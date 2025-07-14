@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col">
                <button class="btn btn-success">Click Me</button>
            </div>
        </div>
    </div>
@endsection


@section('js')
    <script type="module">
        $("button").click(function(){
            alert("Thanks");
        });
    </script>
@endsection


