@extends('layout')
@section('content')
<div class="flex flex-row">
    <h1 class="text-3xl font-bold my-5">Clientes</h1>
</div>
<hr>
<div class="text-xl py-5">
    <p class="py-2"><b>Nome:</b> {{ $client->nome }}</p>
    <p class="py-2"><b>Fone:</b> {{ $client->fone }}</p>
    <p class="py-2"><b>Endereço:</b> {{ $client->endereco }}</p>
    <p class="py-2"><b>CEP:</b> {{ $client->cep }}</p>
    <p class="py-2"><b>Cidade:</b> {{ $client->cidade }}</p>
    <p class="py-2"><b>Estado:</b> {{ $client->estado }}</p>
    <p class="py-2"><b>CNPJ:</b> {{ $client->cnpj }}</p>
    <p class="py-2"><b>CPF:</b> {{ $client->cpf }}</p>
    <p class="py-2"><b>Criado em:</b> {{ date('d-m-Y', strtotime($client->created_at)) }}</p>
</div>
@endsection
