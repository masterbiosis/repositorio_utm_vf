<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <style>
        .text-muted{
            color: rgba(255, 255, 255, 0.7)
        }
    </style>
    <title>Document</title>
</head>
<body>
    <main>
        <div class="div">
            <h2>Alumno: {{$alumno->nombre}} {{$alumno->apellidom}} {{$alumno->apellidom}} </h2>
            <p>No se requiere contestar, ya que solamente, es una prueba de envia de correo electrónico</p>
            <p>Email: <span class="text-muted">{{$alumno->email}}</span> </p>
            <p>Password: <span class="text-muted">7889g78gj6</span></p>
            <p>Verificar correo: </p>
        </div>
    </main>

</body>
</html>





