<html lang="pt-br">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <style>
        body {
            font-family: DeJaVu Sans;
        }
         table {
            border-width: 1px;
            border-style: solid;
            width: 100%;
            table-layout: auto;
         }
         thead, tr {
            border-width: 1px;
            border-style: solid;
         }
        thead, tr {
            height: 1em;
        }
         th, td {
            padding: 1.25rem;
            border-width: 1px;
            border-style: solid;
            border-top: 0px;
            margin: 0.5em;
         }
         #client-container {
            padding-top: 1.25rem;
            padding-bottom: 1.25rem;
            font-size: 12px;
            line-height: 1em;
         }
        #final-price-container {
            display: flex;
            flex-direction: column;
            width: 100%;
            justify-content: flex-end;
            text-align: right;
            margin: 0;
            padding: 0;
        }
        .price {
            align-self: flex-end;
        }
    </style>
</head>
<body>
<div>
    <img
        src="{{ public_path('storage/genesis-logo.jpeg') }}"
        alt="logo"
        width="25%"
    />
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
        <thead>
            <tr>
                <th colspan="3">
                    <h2><b>Produtos:</b></h2>
                </th>
            </tr>
            <tr>
                <th>Descrição - Gradação</th>
                <th>Valor unitário</th>
                <th>Quantidade</th>
            </tr>
        </thead>
        <tbody>
            @foreach($selectedProducts as $key => $selectedProduct)
            <tr>
                <td>{{ $selectedProduct->descricao }} - {{ $selectedProduct->gradacao }}</td>
                <td>R$ {{ $selectedProduct->preco}}</p>
                <td> {{ $currentProductsQty[$key] }}</p>
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
