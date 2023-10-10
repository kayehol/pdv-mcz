<html>

<body>
    <h1>Clientes</h1>
    @foreach ($clients as $client)
    <p>Cliente: {{ $client->nome }}</p>
    @endforeach
</body>

</html>
