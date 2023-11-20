<html lang="pt-br">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <style>
        body {
            font-family: DeJaVu Sans;
        }
         table {
            border-width: 2px;
            border-style: solid;
            width: 100%;
            table-layout: auto;
         }
         thead, tr {
            border-width: 2px;
            border-style: solid;
         }
         th, td {
            padding: 1.25rem;
         }
         #client-container {
            padding-top: 1.25rem;
            padding-bottom: 1.25rem;
         }
        #final-price-container {
            display: flex;
            flex-direction: column;
        }
        .price {
            padding-top: 1.25rem;
            padding-bottom: 1.25rem;
            padding-left: 5rem;
            padding-right: 5rem;
            align-self: flex-end;
        }
    </style>
</head>
<body>
<div>
    @isset($client)
    <div id="client-container">
        <p><b>Cliente:</b> {{ $client->nome }}</p>
        @if($client->cnpj)
        <p><b>CNPJ:</b> {{ $client->cnpj}}</p>
        @endif
        @if($client->cpf)
        <p><b>CPF:</b> {{ $client->cpf}}</p>
        @endif
        <p><b>Endereço:</b> {{ $client->endereco }}</p>
        <p><b>Cidade:</b> {{ $client->cidade }}</p>
        <p><b>Estado:</b> {{ $client->estado}}</p>
        <p><b>CEP:</b> {{ $client->cep}}</p>
        <p><b>Fone:</b> {{ $client->fone}}</p>
    </div>
    @endisset
    @isset($selectedProducts)
    <table>
        <h2><b>Produtos:</b></h2>
        <thead>
            <tr>
                <th>Descrição - Gradação</th>
                <th>Valor unitário</th>
                <th>Quantidade</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            @foreach($selectedProducts as $key => $selectedProduct)
            <tr>
                <td>{{ $selectedProduct->descricao }} - {{ $selectedProduct->gradacao }}</td>
                <td>R$ {{ $selectedProduct->preco}}</p>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endisset
<div id="final-price-container">
    <div class="price">
        <p><b>Subtotal:</b> R$ {{ number_format($subtotal, 2, ',', '.') }}</p>
    </div>
    <div class="price">
        <p><b>Total:</b> R$ {{ number_format($total, 2, ',', '.') }}</p>
    </div>
</div>
</body>
</html>
