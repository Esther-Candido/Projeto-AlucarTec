<!--FORMULARIO PARA CRIAR OS CLIENTES-->


<form action="{{ route('clientes.store') }}" method="POST">
    @csrf
    <label for="nome">Nome:</label>
    <input type="text" name="nome" required>

    <label for="num_carta_conducao">Nº Carta Condução:</label>
    <input type="text" name="num_carta_conducao" required>

    <label for="telemovel">Telemovel:</label>
    <input type="text" name="telemovel" required>

    <label for="email">E-mail:</label>
    <input type="text" name="email" required>

    <button type="submit">Salvar</button>
</form>

