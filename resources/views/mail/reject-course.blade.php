<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<style>
    h1{
        color: red;
    }
</style>
    <h1>Este es un correo</h1>
    <p>El curso <strong> {{$course->title}} </strong> ha sido rechazado</p>

    <h2>Motivo del rechazado</h2>
    {!!$course->observation->body!!}
    
</body>
</html>