<!--FORMULARIO PARA CRIAR OS CARROS-->


<form action="{{ route('carros.store') }}" method="POST">
    @csrf
    <label for="modelo">Modelo:</label>
    <input type="text" name="modelo" required>

    <label for="marca">Marca:</label>
    <input type="text" name="marca" required>

    <label for="ano">Ano:</label>
    <input type="text" name="ano" required>

    <label for="ano">Matricula:</label>
    <input type="text" name="matricula" required>

    <button type="submit">Salvar</button>
</form>


