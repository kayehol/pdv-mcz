<div>
    <div class="flex flex-row">
        <div>
            <p>Clientes:</p>
            <select wire:model.live="selectedClientId">
                @foreach($clients as $client)
                <option value="{{ $client->id }}">{{ $client->nome }}</option>
                @endforeach
            </select>
        </div>
        <div>
            <p>Produtos</p>
            <select wire:model.live="selectedProductId">
                @foreach($products as $product)
                <option value="{{ $product->id }}">{{ $product->descricao }} - {{ $product->gradacao }}</option>
                @endforeach
            </select>
            <button wire:click="add">Adicionar</button>
        </div>
    </div>
    <hr>
    <div>
        @isset($this->client)
        <div>
            <p>Cliente: {{ $this->client->nome }}</p>
            @if($this->client->cnpj)
            <p>CNPJ: {{ $this->client->cnpj}}</p>
            @endif
            @if($this->client->cpf)
            <p>CPF: {{ $this->client->cpf}}</p>
            @endif
            <p>Endereço: {{ $this->client->endereco }}</p>
            <p>Cidade: {{ $this->client->cidade }}</p>
            <p>Estado: {{ $this->client->estado}}</p>
            <p>CEP: {{ $this->client->cep}}</p>
            <p>Fone: {{ $this->client->fone}}</p>
            <hr>
        </div>
        @endisset
        @isset($this->selectedProducts)
        <div>
            <p>Produtos: </p>
            @foreach($this->selectedProducts as $selectedProduct)
            <div>
                <p>{{ $selectedProduct->descricao }} - {{ $selectedProduct->gradacao }}</p>
                <p>Valor unitário - {{ $selectedProduct->preco}}</p>
                <div>
                    <label for="qtd">Quantidade</label>
                    <input />

                </div>
                <button>Remover</button>
            </div>
            @endforeach
            <hr>
        </div>
        @endisset
        @isset($this->subtotal)
        <div>
            <p>Subtotal: {{ $this->subtotal }}</p>
            <hr>
        </div>
        @endisset
        @isset($this->total)
        <div>
            <p>Total: {{ $this->total }}</p>
        </div>
        @endisset
    </div>
</div>
