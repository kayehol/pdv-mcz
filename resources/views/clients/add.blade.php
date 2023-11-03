@extends('layout')

@section('content')
<div class="flex flex-row">
    <h1 class="text-3xl font-bold my-5">Clientes</h1>
</div>
<hr>
@if ($errors->any())
<div class="alert alert-danger">
    <ul>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif
<form method="POST" action="{{url('clients')}}">
    @csrf
    <div class="flex flex-col p-3">
        <div class="py-2">
            <label for="name">Nome</label>
            <input class="w-full rounded-md border-0 py-1.5 pl-7 pr-20 ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" id="name" type="text" name="name">
        </div>
        <div class="flex flex-row items-center">
            <div class="py-2">
                <label for="email">E-mail</label>
                <input class="w-full rounded-md border-0 py-1.5 pl-7 pr-20 ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" id="email" type="text" name="email">
            </div>
            <div class="py-2 ml-5">
                <label for="phone">Telefone</label>
                <input class="w-full rounded-md border-0 py-1.5 pl-7 pr-20 ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" id="phone" type="text" name="phone">
            </div>
        </div>
        <div class="py-2">
            <label for="address">Endereço</label>
            <input class="w-full rounded-md border-0 py-1.5 pl-7 pr-20 ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" id="address" type="text" name="address">
        </div>
        <div class="flex flex-row items-center">
            <div class="py-2">
                <label for="cep">CEP</label>
                <input class="w-full rounded-md border-0 py-1.5 pl-7 pr-20 ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" id="cep" type="text" name="cep">
            </div>
            <div class="py-2 ml-5">
                <label for="city">Cidade</label>
                <input class="w-full rounded-md border-0 py-1.5 pl-7 pr-20 ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" id="city" type="text" name="city">
            </div>
            <div class="py-2 ml-5">
                <label for="state">Estado</label>
                <input class="w-full rounded-md border-0 py-1.5 pl-7 pr-20 ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" id="state" type="text" name="state">
            </div>
        </div>
        <div class="flex flex-row items-center">
            <div class="py-2">
                <label for="cnpj">CPNJ</label>
                <input class="w-full rounded-md border-0 py-1.5 pl-7 pr-20 ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" id="cnpj" type="text" name="cnpj">
            </div>
            <div class="py-2 ml-5">
                <label for="cpf">CPF</label>
                <input
                    class="w-full rounded-md border-0 py-1.5 pl-7 pr-20 ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" id="cpf" type="text" name="cpf">
            </div>
        </div>

        <input class="w-2/4 self-center bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 my-5 mx-5 rounded" type="submit" value="Enviar">
    </div>
</form>
<script>
$(document).ready(function(){
    $('#cpf').inputmask('999.999.999-99');
    $('#cnpj').inputmask('99.999.999/9999-99');
    $('#cep').inputmask('99999-999');
    $('#phone').inputmask('(99)99999-9999');
});
</script>
@endsection
