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
        <button>Editar</button>
        <button>Excluir</button>
    </div>
    @endforeach
</body>

</html>
