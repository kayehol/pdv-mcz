<html>

<head>
    <title>PDV</title>
    @vite('resources/css/app.css')
</head>

<body>
    <div class="flex flex-row">
        @section('sidebar')
        <nav class="basis-1/4">
            <div class="p-5">Logo</div>
            <ul class="p-5">
                <li class="py-2 font-bold hover:text-blue-700"><a href="/clients">Clientes</a></li>
                <li class="py-2 font-bold hover:text-blue-700"><a href="/products">Produtos</a></li>
                <li class="py-2 font-bold hover:text-blue-700"><a href="/sales">Vendas</a></li>
            </ul>
        </nav>
        @show

        <div class="basis-3/4">
            @yield('content')
        </div>
    </div>
</body>

</html>
