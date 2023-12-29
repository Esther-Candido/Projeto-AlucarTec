<!--PAGINA HTML PARA LISTAR OS CLIENTES-->

<!DOCTYPE html>
<html>
<head>
    <title>Listagem de Clientes</title>
</head>
<body>
<h1>Lista de Clientes</h1>



<table>
    <thead>
    <tr>
        <th>Nome</th>
        <th>Nº Carta de Conducao</th>
        <th>Telemovel</th>
        <th>Email</th>
    </tr>
    </thead>
    <tbody>

    @foreach($clientes as $cliente)

    <tr>
        <td>{{ $cliente->nome}}</td>
        <td>{{ $cliente->num_carta_conducao}}</td>
        <td>{{ $cliente->telemovel}}</td>
        <td>{{ $cliente->email}}</td>
    </tr>
    @endforeach

    </tbody>
</table>
</body>
</html>
