<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tareas</title>
</head>
<body>
    <h1>Añadir tarea</h1>
    <form action="/tareas/store" method="post">
        @csrf
        <input type="text" name='titulo' placeholder="Titulo tarea">
        <input type="text" name='descripcion' placeholder="Descripcion tarea">
        <input type="date" name='fecha_limite'>
        <select name="trabajador_id">
            @foreach ($trabajadores as $trabajador)
                <option value="{{ $trabajador->id }}">{{ $trabajador->nombre }} {{ $trabajador->apellido }}</option>
            @endforeach
        </select>
        <button type="submit">Añadir tarea</button>
        <a href="..">Volver al inicio</a>
    </form>
</body>
</html>
