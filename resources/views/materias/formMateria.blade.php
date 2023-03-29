<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="{{ route('materia.css) }}" method="POST">
        @csrf
        <label for="nombre_materia">Materia: </label>
            <input type="text" name="nombre_materia" id="nombre_materia">
            <br>
            <select name="departamento_id">
                @foreach ($departamentos as $departamento)
                    <option value="{{ $departamento->id }}">{{ $departamento->descripcion }}</option>
                @endforeach
            <br>
            <input type="submit" value="Guardar">
    </form>
</body>
</html>