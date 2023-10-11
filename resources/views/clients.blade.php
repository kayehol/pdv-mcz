<html>

<body>
    <a href="/clients/add">
        <button>Adicionar</button>
    </a>
    <h1>Clientes</h1>
    @foreach ($clients as $client)
    <p>{{ $client->nome }}</p>
    @endforeach
</body>

</html>
