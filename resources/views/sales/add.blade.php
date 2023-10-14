@extends('layout')

@section('content')
<div class="flex flex-row">
  <h1 class="text-3xl font-bold my-5">Nova venda</h1>
</div>
<hr>
<div>
  <div>
    <p>Cliente:</p>
    <select name="clients">
      @foreach($clients as $client)
      <option value="{{ $client->id }}">{{ $client->nome }}</option>
      @endforeach
    </select>
    <button>Adicionar</button>
  </div>
  <div>
    <p>Produtos:</p>
    <select name="products">
      @foreach($products as $product)
      <option value="{{ $product->id}}">{{ $product->descricao }}</option>
      @endforeach
    </select>
    <button>Adicionar</button>
  </div>
</div>
<hr>
<x-sale :client="$selectedClient" :products="$selectedProduct" />
@endsection
