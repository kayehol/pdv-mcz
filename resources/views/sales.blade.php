@extends('layout')

@section('content')
<div class="flex flex-row">
  <h1 class="text-3xl font-bold my-5">Vendas</h1>
  <a href="/sales/add">
    <button
        class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 my-5 mx-5 rounded-lg">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-5 h-5">
          <path d="M10.75 4.75a.75.75 0 00-1.5 0v4.5h-4.5a.75.75 0 000 1.5h4.5v4.5a.75.75 0 001.5 0v-4.5h4.5a.75.75 0 000-1.5h-4.5v-4.5z" />
        </svg>
    </button>
  </a>
</div>
<hr>
@foreach ($sales as $sale)
<div class="flex flex-row py-5 px-2 bg-white hover:bg-slate-200 items-center justify-between">
  <div class="flex flex-row">
    <div>
      <a href="{{ '/sales/'.$sale->id }}">
        <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-1 px-4 mx-2 rounded">Ver</button>
      </a>
    </div>
  </div>
</div>
@endforeach
@endsection
