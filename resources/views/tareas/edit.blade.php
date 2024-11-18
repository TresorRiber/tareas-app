<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tareas</title>
</head>
<body>
    <h1>Editar tareas</h1>
    <form action="/tareas/update/{{ $tarea->id }}" method="put">
        @csrf
        <ul>
        <input type="text" name='titulo' value="{{ $tarea->titulo }}" >
        <input type="text" name='descripcion' value="{{ $tarea->descripcion }}" >
        <input type="date" name='fecha_limite' value="{{ $tarea->fecha_limite }}">
        <select name="trabajador_id">
            @foreach ($trabajadores as $trabajador)
                <option value="{{ $trabajador->id }}">{{ $trabajador->nombre }} {{ $trabajador->apellido }}</option>
            @endforeach
        </select>
        </ul>
        <button type="submit">Editar tarea</button>
        <a href="../..">Volver al inicio</a>
    </form>
</body>
</html>