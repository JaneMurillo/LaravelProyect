<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table>
        <tr>
            <th>ID</th>
            <th>Nombre Materia</th>
            <th>Departamento</th>
        </tr>
        @foreach ($materias as $materia)
            <tr>
                <td>{{ $materia->id }}</td>
                <td>{{ $materia->nombre_materia }}</td>
                <td>{{ $materia->departamento->descripcion }}</td>
            </tr>
        @endforeach
    </table>
</body>
</html>