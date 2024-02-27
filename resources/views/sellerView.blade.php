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

<form action="{{route('seller.store')}}" method="POST" enctype="multipart/form-data">

@csrf

<label>
    Escriba el nombre del vendedor:
    <br>
    <input type="text" name="name">
</label>
<br>
<label>
    Escriba el documento del vendedor:
    <br>
    <input type="number" name="document">
</label>
<br>
<label>
    Escriba el numero del vendedor:
    <br>
    <input type="number" name="num">
</label>
<br>
<br><br>

<button type="submit">Enviar Formulario:</button>
</form>
</body>
</html>