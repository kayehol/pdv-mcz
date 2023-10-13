@extends('layout')

@section('content')
<div class="flex flex-row">
  <h1 class="text-3xl font-bold my-5">Produtos</h1>
  <a href="/products/add">
    <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 my-5 mx-5 rounded">Adicionar</button>
  </a>
</div>
<hr>
@foreach ($products as $product)
<div class="flex flex-row py-5 px-2 bg-white hover:bg-slate-200 items-center justify-between">
  <div>
    <p>{{ $product->descricao }}</p>
  </div>
  <div class="flex flex-row">
    <div>
      <a href="{{ '/products/'.$product->id }}">
        <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-1 px-4 mx-2 rounded">Ver</button>
      </a>
    </div>
    <div>
      <a href="{{ '/products/edit/'.$product->id }}">
        <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-1 px-4 mx-2 rounded">Editar</button>
      </a>
    </div>
    <div>
      <form action="{{ '/products/delete/'.$product->id }}" method="POST">
        @csrf
        <input type="submit" value="Excluir" class="bg-red-500 hover:bg-red-700 text-white font-bold py-1 px-4 mx-2 rounded">
      </form>
    </div>
  </div>
</div>
@endforeach
@endsection
