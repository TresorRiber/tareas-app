<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tareas</title>
</head>
<body>
    <h1>Lista tareas</h1>
        <ul>
            @foreach ($tareas as $tarea)
            <form action="/tareas/destroy/{{ $tarea -> id }}" method="post">
                @csrf
                @method('delete')
                <li><a href="/tareas/edit/{{ $tarea->id }}"> {{ $tarea->titulo }} {{ $tarea->descripcion }} {{ $tarea->fecha_limite }} 
                    <button type="submit">Borrar</button></li>
                </form>
            @endforeach
        </ul>
    
    <a href="create">Añadir tarea</a>
    <a href="..">Volver al inicio</a>
</body>
</html>
