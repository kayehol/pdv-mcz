<html lang="pt-br">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <style>
         body { font-family: DeJaVu Sans; }
    </style>
</head>
<body>
<div>
    @isset($client)
    <div class="py-5">
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
    <table class="table-auto w-full border-solid border-2">
        <h2><b>Produtos:</b></h2>
        <thead class="border-solid border-2">
            <tr>
                <th class="p-5">Descrição - Gradação</th>
                <th class="p-5">Valor unitário</th>
                <th class="p-5">Quantidade</th>
                <th class="p-5"></th>
            </tr>
        </thead>
        <tbody>
            @foreach($selectedProducts as $key => $selectedProduct)
            <tr class="border-solid border-2">
                <td class="p-5">{{ $selectedProduct->descricao }} - {{ $selectedProduct->gradacao }}</td>
                <td class="p-5">R$ {{ $selectedProduct->preco}}</p>
                <td class="p-5">
                    <input
                        type="text"
                        placeholder="1"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" />
                </td>
                <td class="p-5">
                    <button
                        class="bg-red-500 hover:bg-red-700 text-white font-bold py-1 px-4 mx-2 rounded">
                        Remover
                    </button>
                </td>
                <td class="p-5">
                    <button
                        class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 my-5 mx-5 rounded"
                        Adicionar
                    </button>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endisset
<div class="flex flex-col">
    <div class="py-5 px-20 self-end">
        <p><b>Subtotal:</b> R$ {{ number_format($subtotal, 2, ',', '.') }}</p>
    </div>
    <div class="py-5 px-20 self-end">
        <p><b>Total:</b> R$ {{ number_format($total, 2, ',', '.') }}</p>
    </div>
</div>
</body>
</html>
