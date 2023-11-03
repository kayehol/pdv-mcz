<div>
    <div class="flex flex-row justify-start py-5">
        <div class="pr-5">
            <p>Cliente</p>
            <select
                class="inline-flex w-full justify-center gap-x-1.5 rounded-md bg-white px-3 py-2 text-sm font-semibold text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 hover:bg-gray-50"
                wire:model.live="selectedClientId">
                @foreach($clients as $client)
                <option value="{{ $client->id }}">{{ $client->nome }}</option>
                @endforeach
            </select>
        </div>
        <div>
            <p>Produtos</p>
            <div class="flex flex-row">
                <select
                    class="inline-flex w-full justify-center gap-x-1.5 rounded-md bg-white px-3 py-2 text-sm font-semibold text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 hover:bg-gray-50"
                    wire:model.live="selectedProductId">
                    @foreach($products as $product)
                    <option value="{{ $product->id }}">{{ $product->descricao }} - {{ $product->gradacao }}</option>
                    @endforeach
                </select>
                <button
                    class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 my-5 mx-5 rounded"
                    wire:click="add">
                    Adicionar
                </button>
            </div>
        </div>
    </div>
    <hr>
    <div>
        @isset($this->client)
        <div class="py-5">
            <p><b>Cliente:</b> {{ $this->client->nome }}</p>
            @if($this->client->cnpj)
            <p><b>CNPJ:</b> {{ $this->client->cnpj}}</p>
            @endif
            @if($this->client->cpf)
            <p><b>CPF:</b> {{ $this->client->cpf}}</p>
            @endif
            <p><b>Endereço:</b> {{ $this->client->endereco }}</p>
            <p><b>Cidade:</b> {{ $this->client->cidade }}</p>
            <p><b>Estado:</b> {{ $this->client->estado}}</p>
            <p><b>CEP:</b> {{ $this->client->cep}}</p>
            <p><b>Fone:</b> {{ $this->client->fone}}</p>
        </div>
        @endisset
        @isset($this->selectedProducts)
        {{ json_encode($this->selectedProducts)}}
        {{ json_encode($this->currentProductsQty)}}
        <table class="table-fixed border-solid border-2">
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
                @foreach($this->selectedProducts as $key => $selectedProduct)
                <tr class="border-solid border-2">
                    <td class="p-5">{{ $selectedProduct->descricao }} - {{ $selectedProduct->gradacao }}</td>
                    <td class="p-5">R$ {{ $selectedProduct->preco}}</p>
                    <td class="p-5">
                        <input
                            wire:model.live="currentProductsQty.{{ $key }}"
                            type="text"
                            placeholder="1"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" />
                    </td>
                    <td class="p-5">
                        <button
                            wire:click="remove({{ $selectedProduct->preco }}, {{ $key }})"
                            class="bg-red-500 hover:bg-red-700 text-white font-bold py-1 px-4 mx-2 rounded">
                            Remover
                        </button>
                    </td>
                    <td class="p-5">
                        <button
                            class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 my-5 mx-5 rounded"
                            wire:click="addToSale({{ $selectedProduct->preco }}, {{ $key }})">
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
            <p><b>Subtotal:</b> {{ $this->subtotal }}</p>
        </div>
        <div class="py-5 px-20 self-end">
            <p><b>Total:</b> {{ $this->total }}</p>
        </div>
    </div>
    <div>
        <button
            wire:click="storeSale()"
            class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 my-5 mx-5 rounded"
        >Salvar</button>
    </div>
</div>
</div>
