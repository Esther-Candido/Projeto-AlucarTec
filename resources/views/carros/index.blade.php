<!--PAGINA HTML PARA LISTAR OS CARROS-->

<!DOCTYPE html>
<html>
<head>
    <title>Listagem de Carros</title>
</head>
<body>
<h1>Lista de Carros</h1>

<table>
    <thead>
    <tr>
        <th>Modelo</th>
        <th>Marca</th>
        <th>Ano</th>
    </tr>
    </thead>
    <tbody>

    @foreach($carros as $carro)
    <tr>
        <td>{{ $carro->modelo }}</td>
        <td>{{ $carro->marca }}</td>
        <td>{{ $carro->ano }}</td>
    </tr>
    @endforeach

    </tbody>
</table>
</body>
</html>
