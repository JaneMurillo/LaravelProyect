<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1> {{ $departamento->descripcion }} </h1>
        <ul>
            @foreach ($departamento->materias as )
                <li> {{ $materia->nombre_materia }} </li>
            @endforeach
        </ul>
    </h1>
</body>
</html>