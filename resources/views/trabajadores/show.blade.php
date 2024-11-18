<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Show</title>
</head>
<body>
    <h1>Trabajador y sus tareas</h1>
    {{ $trabajador-> nombre }} {{ $trabajador-> apellido }} {{ $trabajador-> dni }}
    @foreach ($tareas as $tarea)
    @csrf
    <li>{{ $tarea->titulo }} 
    @endforeach
    <a href="/trabajadores/index">Volver lista trabajadores</a>
</body>
</html>