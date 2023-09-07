<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        h1{
            color: red;
        }
    </style>
</head>
<body>


    <h1>Este es un correo</h1>
    <p>Consulta sonre el curso</p>
    <p><strong>Nombre:{{$contacto['name']}}</p></strong> 
    <p><strong>email:{{$contacto['email']}}</p></strong> 
    <p><strong>Mensaje:{{$contacto['descr']}}</p></strong> 
</body>
</html>