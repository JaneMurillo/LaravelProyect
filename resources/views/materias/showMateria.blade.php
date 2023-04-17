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
        <tr>
            <td>{{ $materia->id }}</td>
            <td>{{ $materia->nombre_materia }}</td>
            <td>{{ $materia->departamento->descripcion }}</td>
        </tr>
    </table>

    <table>
        <tr>
            <th>ID</th>
            <th>Alumnos inscritos</th>
        </tr>
        @foreach ($materia->alumnos as $alumno)
            <tr>
                <td>{{ $alumno->id }}</td>
                <td>{{ $alumno->nombre }}</td>
            </tr>
        @endforeach
    </table>

    <h2>Formulario Administrar Alumnos</h2>
    <form action="{{ route('materia.admin-alumnos', $materia) }}" method="POST">
        @csrf
        <!-- Agrega con cntl y clic -->
        <select name="alumno_id[]" multiple> 
            @foreach ($alumnos as $alumno)
                <option value="{{ $alumno->id }}" 
                    @selected(array_search($alumno->id, $materia->alumnos()->pluck('id')->toArray()) === false)
                    <!-- @selected(array_search($alumno->id, $materia->alumnos()->pluck('id')->toArray()) !== false) -->
                >
                    {{ $alumno->nombre }}
                </option>
            @endforeach
        </select>
        <!-- input:hidden -->
        <input type="hidden" name="materia_id" value="{{ $materia->id }}">
        <br>
        <button type="submit">Agregar Alumno</button>
    </form>
</body>
</html>