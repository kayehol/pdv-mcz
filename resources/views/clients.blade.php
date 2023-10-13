@extends('layout')

@section('content')
<div class="flex flex-row">
    <h1 class="text-3xl font-bold my-5">Clientes</h1>
    <a href="/clients/add">
        <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 my-5 mx-5 rounded">Adicionar</button>
    </a>
</div>
<hr>
@foreach ($clients as $client)
<div class="flex flex-row py-5 px-2 bg-white hover:bg-slate-200 items-center justify-between">
    <div>
        <p>{{ $client->nome }}</p>
    </div>
    <div class="flex flex-row">
        <div>
            <a href="{{ '/clients/'.$client->id }}">
                <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-1 px-4 mx-2 rounded">Ver</button>
            </a>
        </div>
        <div>
            <a href="{{ '/clients/edit/'.$client->id }}">
                <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-1 px-4 mx-2 rounded">Editar</button>
            </a>
        </div>
        <div>
            <form action="{{ '/clients/delete/'.$client->id }}" method="POST">
                @csrf
                <input type="submit" value="Excluir" class="bg-red-500 hover:bg-red-700 text-white font-bold py-1 px-4 mx-2 rounded">
            </form>
        </div>
    </div>
</div>
@endforeach
@endsection
