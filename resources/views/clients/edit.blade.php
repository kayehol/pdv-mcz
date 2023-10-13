@extends('layout')

@section('content')
<div class="flex flex-row">
    <h1 class="text-3xl font-bold my-5">Clientes</h1>
</div>
<hr>
<form method="POST" action="{{url('clients')}}">
    @csrf
    <div class="flex flex-col p-3">
        <div class="py-2">
            <label for="name">Nome</label>
            <input class="w-full rounded-md border-0 py-1.5 pl-7 pr-20 ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" id="name" type="text" name="name" value="{{ $client->nome }}">
        </div>
        <div class="flex flex-row items-center">
            <div class="py-2">
                <label for="email">E-mail</label>
                <input class="w-full rounded-md border-0 py-1.5 pl-7 pr-20 ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" id="email" type="text" name="email" value="{{ $client->email}}">
            </div>
            <div class="py-2 ml-5">
                <label for="phone">Telefone</label>
                <input class="w-full rounded-md border-0 py-1.5 pl-7 pr-20 ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" id="phone" type="text" name="phone" value="{{ $client->fone }}">
            </div>
        </div>
        <div class="py-2">
            <label for="address">Endereço</label>
            <input class="w-full rounded-md border-0 py-1.5 pl-7 pr-20 ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" id="address" type="text" name="address" value="{{ $client->endereco}}">
        </div>
        <div class="flex flex-row items-center">
            <div class="py-2">
                <label for="cep">CEP</label>
                <input class="w-full rounded-md border-0 py-1.5 pl-7 pr-20 ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" id="cep" type="text" name="cep" value="{{ $client->cep}}">
            </div>
            <div class="py-2 ml-5">
                <label for="city">Cidade</label>
                <input class="w-full rounded-md border-0 py-1.5 pl-7 pr-20 ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" id="city" type="text" name="city" value="{{ $client->cidade }}">
            </div>
            <div class="py-2 ml-5">
                <label for="state">Estado</label>
                <input class="w-full rounded-md border-0 py-1.5 pl-7 pr-20 ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" id="state" type="text" name="state" value="{{ $client->estado }}">
            </div>
        </div>
        <div class="flex flex-row items-center">
            <div class="py-2">
                <label for="cnpj">CPNJ</label>
                <input class="w-full rounded-md border-0 py-1.5 pl-7 pr-20 ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" id="cnpj" type="text" name="cnpj" value="{{ $client->cnpj }}">
            </div>
            <div class="py-2 ml-5">
                <label for="cpf">CPF</label>
                <input class="w-full rounded-md border-0 py-1.5 pl-7 pr-20 ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" id="cpf" type="text" name="cpf" value="{{ $client->cpf }}">
            </div>
        </div>

        <input class="w-2/4 self-center bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 my-5 mx-5 rounded" type="submit" value="Enviar">
    </div>
</form>
@endsection
