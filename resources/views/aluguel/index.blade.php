
<!--TABELA DE ALUGUEL RELACIONANDO CLIENTE X CARRO-->

<!DOCTYPE html>
<html>
<head>
    <title>Lista de Aluguéis</title>
</head>
<body>
<h1>Lista de Aluguéis</h1>

<table>
    <thead>
    <tr>
        <th>ID</th>
        <th>Carro</th>
        <th>Cliente</th>
        <th>Data de Início</th>
        <th>Data de Fim</th>
        <th>Valor Total</th>
    </tr>
    </thead>
    <tbody>

    @foreach($aluguel as $alu)
        <tr>
            <td>{{$alu->id}}</td>

            @if ($alu->carro)
                <td>{{$alu->carro->modelo}} ({{$alu->carro->marca}})</td>
            @else
                <td>Carro não encontrado para o aluguel com ID {{$alu->id}}</td>
            @endif

            @if ($alu->cliente)
                <td>{{$alu->cliente->nome}}</td>
            @else
                <td>Cliente não encontrado para o aluguel com ID {{$alu->id}}</td>
            @endif


            <td>{{$alu->data_inicio ?: 'Data de início ausente'}}</td>
            <td>{{$alu->data_fim}}</td>
            <td>{{$alu->valor_total}}</td>
        </tr>
    @endforeach


    </tbody>
</table>
</body>
</html>
