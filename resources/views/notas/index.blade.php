<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Lista de Notas</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
    <script src='main.js'></script>
</head>
<body>
    <table>
        <thead>
            <th>ID</th>
            <th>Titulo</th>
            <th>Accion</th>
        </thead>
        <tbody>
            @foreach($notas as $nota)
            <tr>
                <td>{{ $nota->id }}</td>
                <td>{{ $nota->titulo }}</td>
                <td>
                    @can('eliminar-notas')
                        <a href="{{ route('notas.eliminar', $nota->id) }}">Eliminar Notas</a>
                    @else
                        Usted no puede eliminar esta nota
                    @endcan
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>