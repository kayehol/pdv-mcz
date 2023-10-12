<html>

<body>
    <a href="/clients/add">
        <button>Adicionar</button>
    </a>
    <h1>Clientes</h1>
    @foreach ($clients as $client)
    <div>
        <p>{{ $client->nome }}</p>
        <a href="{{ '/clients/'.$client->id }}">
            <button>Ver</button>
        </a>
        <a href="{{ '/clients/edit/'.$client->id }}">
            <button>Editar</button>
        </a>
        <form action="{{ '/clients/delete/'.$client->id }}" method="POST">
            @csrf
            <input type="submit" value="Excluir">
        </form>
    </div>
    @endforeach
</body>

</html>
