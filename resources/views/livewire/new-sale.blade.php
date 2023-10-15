<div>
    <div class="flex flex-row">
        <div>
            <p>Clientes:</p>
            <select wire:model.live="selectedClient">
                @foreach($clients as $client)
                <option>{{ $client->nome }}</option>
                @endforeach
            </select>
        </div>
        <div>
            <p>Produtos</p>
            <select>
                @foreach($products as $product)
                <option value="{{ $product->id }}">{{ $product->descricao }}</option>
                @endforeach
            </select>
            <button>Adicionar</button>
        </div>
    </div>
    <hr>
    <div>
        <p>Cliente: {{ $selectedClient }}</p>
        <p>Produtos: </p>
    </div>
</div>
