@extends('layout')
@section('content')
<div class="flex flex-row">
  <h1 class="text-3xl font-bold my-5">Produtos</h1>
</div>
<hr>
<div class="text-xl py-5">
  <p class="py-2"><b>Descrição:</b> {{ $product->descricao }}</p>
  <p class="py-2"><b>Preço:</b> {{ $product->preco }}</p>
  <p class="py-2"><b>Gradação:</b> {{ $product->gradacao }}</p>
  <p class="py-2"><b>Código:</b> {{ $product->codigo }}</p>
  <p class="py-2"><b>Criado em:</b> {{ date('d-m-Y', strtotime($product->created_at)) }}</p>
</div>
@endsection
