<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ALUMNOS</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T"crossorigin="anonymous">
</head>
<body>
    <div class="container">
    <h1 class="display-3">Lista de ALUMNOS</h1>
    <div class="row">
    <style>
    body {background-color:#AED6F1;}
    </style>
    <div class="col-xl-12">
    <form action="  {{route('estudiante.index')}}" method="GET">
                        <div class="form-row">
                        <div class="col-sm-4 my-1">
                                <input type="text" class="form-control" name="texto">
                            </div>
                            <div class="col-auto my-1">
                                <input type="submit" class="btn btn-primary" value="Buscar">
                            </div>
                            <div class="col-auto my-1">
                                <a href="{{route('estudiante.create')}}" class="btn btn-success">Nuevo De lista</a>
                        </div>
                    </form>
                    <div class="table-responsive">
                        <table class="table table-borderless table-dark">
                            <thead>
                                <tr>
                                    <th>Matricula</th>
                                    <th>Nombre</th>
                                    <th>Edad</th>
                                    <th>Direccion</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($estudiante as $estudiante)
                                <td>{{$estudiante->Matricula}}</td>
                                <td>{{$estudiante->Nombre}}</td>
                                <td>{{$estudiante->Edad}}</td>
                                <td>{{$estudiante->Direccion}}</td>
                                <tr>
                                    @endforeach
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>




