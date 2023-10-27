@extends('layout')

@section('content')
<div class="flex flex-row">
  <h1 class="text-3xl font-bold my-5">Produtos</h1>
  <a href="/products/add">
    <button
        class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 my-5 mx-5 rounded-lg">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-5 h-5">
          <path d="M10.75 4.75a.75.75 0 00-1.5 0v4.5h-4.5a.75.75 0 000 1.5h4.5v4.5a.75.75 0 001.5 0v-4.5h4.5a.75.75 0 000-1.5h-4.5v-4.5z" />
        </svg>
    </button>
  </a>
</div>
<hr>
@foreach ($products as $product)
<div class="flex flex-row items-center rounded-lg py-8 px-5 odd:bg-white even:bg-slate-100 hover:bg-slate-200 items-center justify-between">
  <div>
    <p>{{ $product->descricao }}</p>
  </div>
  <div class="flex flex-row items-center">
    <div>
      <a href="{{ '/products/'.$product->id }}">
        <button
            class="flex flex-row items-center bg-blue-500 hover:bg-blue-700 text-white font-bold py-1 px-4 mx-2 rounded-lg">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-5 h-5 mr-1">
              <path d="M10 12.5a2.5 2.5 0 100-5 2.5 2.5 0 000 5z" />
              <path fill-rule="evenodd" d="M.664 10.59a1.651 1.651 0 010-1.186A10.004 10.004 0 0110 3c4.257 0 7.893 2.66 9.336 6.41.147.381.146.804 0 1.186A10.004 10.004 0 0110 17c-4.257 0-7.893-2.66-9.336-6.41zM14 10a4 4 0 11-8 0 4 4 0 018 0z" clip-rule="evenodd" />
            </svg>
            Detalhes
        </button>
      </a>
    </div>
    <div>
      <a href="{{ '/products/edit/'.$product->id }}">
        <button
            class="flex flex-row items-center bg-blue-500 hover:bg-blue-700 text-white font-bold py-1 px-4 mx-2 rounded-lg">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-5 h-5 mr-1">
              <path d="M2.695 14.763l-1.262 3.154a.5.5 0 00.65.65l3.155-1.262a4 4 0 001.343-.885L17.5 5.5a2.121 2.121 0 00-3-3L3.58 13.42a4 4 0 00-.885 1.343z" />
            </svg>
            Editar
        </button>
      </a>
    </div>
    <div>
      <form class="m-0" action="{{ '/products/delete/'.$product->id }}" method="POST">
        @csrf
        <input
            type="submit"
            value="Excluir"
            class="items-center bg-red-500 hover:bg-red-700 text-white font-bold py-1 px-4 mx-2 rounded-lg">
      </form>
    </div>
  </div>
</div>
@endforeach
@endsection
