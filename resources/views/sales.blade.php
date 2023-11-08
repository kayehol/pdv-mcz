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
<div class="flex flex-row rounded-lg py-8 px-5 odd:bg-white even:bg-slate-100 hover:bg-slate-200 items-center justify-between">
    <div>
        <div class="flex flex-row">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
              <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 6a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0zM4.501 20.118a7.5 7.5 0 0114.998 0A17.933 17.933 0 0112 21.75c-2.676 0-5.216-.584-7.499-1.632z" />
            </svg>
            <p class="pl-5"> {{ $sale->cliente_id }} </p>
        </div>
        <div class="flex flex-row">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
              <path stroke-linecap="round" stroke-linejoin="round" d="M12 6v12m-3-2.818l.879.659c1.171.879 3.07.879 4.242 0 1.172-.879 1.172-2.303 0-3.182C13.536 12.219 12.768 12 12 12c-.725 0-1.45-.22-2.003-.659-1.106-.879-1.106-2.303 0-3.182s2.9-.879 4.006 0l.415.33M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
            </svg>
            <p class="pl-5"> R$ {{ number_format($sale->total, 2, ',', '.') }}</p>
        </div>
        <div class="flex flex-row">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
              <path stroke-linecap="round" stroke-linejoin="round" d="M6.75 3v2.25M17.25 3v2.25M3 18.75V7.5a2.25 2.25 0 012.25-2.25h13.5A2.25 2.25 0 0121 7.5v11.25m-18 0A2.25 2.25 0 005.25 21h13.5A2.25 2.25 0 0021 18.75m-18 0v-7.5A2.25 2.25 0 015.25 9h13.5A2.25 2.25 0 0121 11.25v7.5" />
            </svg>
            <p class="pl-5"> {{ date('d-m-Y H:m', strtotime($sale->created_at)) }}</p>
        </div>
    </div>
    <div>
      <a href="{{ '/sales/'.$sale->id }}">
        <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-1 px-4 mx-2 rounded">Ver</button>
      </a>
    </div>
</div>
@endforeach
@endsection
