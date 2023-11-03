@extends('layout')

@section('content')
<div class="flex flex-row">
    <h1 class="text-3xl font-bold my-5">Produtos</h1>
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
<form method="POST" action="{{url('products')}}">
    @csrf
    <div class="flex flex-col p-3">
        <div class="py-2">
            <label for="descricao">Descrição</label>
            <input class="w-full rounded-md border-0 py-1.5 pl-7 pr-20 ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" id="description" type="text" name="description">
        </div>
        <div class="flex flex-row items-center">
            <div class="py-2">
                <label for="preco">Preço</label>
                <input class="w-full rounded-md border-0 py-1.5 pl-7 pr-20 ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" id="price" type="text" name="price">
            </div>
            <div class="py-2 ml-5">
                <label for="gradation">Gradação</label>
                <input class="w-full rounded-md border-0 py-1.5 pl-7 pr-20 ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" id="gradation" type="text" name="gradation">
            </div>
        </div>
        <div class="py-2">
            <label for="code">Código</label>
            <input class="w-full rounded-md border-0 py-1.5 pl-7 pr-20 ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" id="code" type="text" name="code">
        </div>

        <input class="w-2/4 self-center bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 my-5 mx-5 rounded" type="submit" value="Enviar">
    </div>
</form>
@endsection
