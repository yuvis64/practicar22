<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T"crossorigin="anonymous">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Lista de alumnos</title>
</head>
<body>
    <div class="container">
   <style>
                    body {background-color:#F4ECF7;}
                </style>
        <div class="row">
            <div class="col-xl-12">
            <div class="row">
            <div class="col-sm-8 offset-sm-2">
            <h1 class="display-3">NUEVO ALUMNOS </h1>
            <div>
            @if ($errors->any())
            <div class="alert alert-danger">
            <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
            </ul>
            </div><br />
    @endif

                <form action="{{route('estudiante.store')}}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="Matricula">Matricula</label>
                        <input type="text" class="form-control" name="Matricula" required maxlength="50">
                    </div>
                    <div class="form-group">
                        <label for="Nombre">Nombre</label>
                        <input type="text" class="form-control" name="Nombre" required maxlength="30">
                    </div>
                    <div class="form-group">
                        <label for="Edad">Edad</label>
                        <input type="text" class="form-control" name="Edad" required maxlength="50">
                    </div>
                    <div class="form-group">
                        <label for="Direccion">Direccion</label>
                        <input type="text" class="form-control" name="Direccion" required maxlength="150">
                    </div>
                    <div class="form-group">
                        <input type="submit" class="btn btn-primary"  value="ENVIAR">
                        <input type="reset" class="btn btn-default" value="Cancelar">
                        <a href="javascript:history.back()"></a>
                    </div>
                </div>
        </div>
    </div>
</body>
</html>
