<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Formulario</h1>

<form action="{{route('client.store')}}" method="POST" enctype="multipart/form-data">

@csrf

<label>
    Escriba el nombre del cliente:
    <br>
    <input type="text" name="name">
</label>
<br>
<label>
    Escriba el documento del cliente:
    <br>
    <input type="number" name="document">
</label>
<br><br>

<button type="submit">Enviar Formulario:</button>
</form>
</body>
</html>