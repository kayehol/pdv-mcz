<html lang="pt-br">

<head>
    <title>PDV</title>
    @vite('resources/css/app.css')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.inputmask/3.3.4/jquery.inputmask.bundle.min.js"></script>
    <meta charset="utf-8">
</head>

<body>
    <div class="flex flex-row">
        @section('sidebar')
        <nav class="h-screen basis-1/4 bg-slate-500">
                <div class="p-5">
                    <img
                        src="{{ Vite::asset('resources/images/genesis-logo.jpeg' )}}"
                        alt="logo"
                        width="150px"
                        height="150px"
                        style="border-radius: 10px;"
                    />
                </div>
            <ul class="p-5">
                <li class="py-2 text-white font-bold hover:text-blue-500"><a href="/clients">Clientes</a></li>
                <li class="py-2 text-white font-bold hover:text-blue-500"><a href="/products">Produtos</a></li>
                <li class="py-2 text-white font-bold hover:text-blue-500"><a href="/sales">Vendas</a></li>
            </ul>
        </nav>
        @show

        <div class="basis-3/4 px-5">
            @yield('content')
        </div>
    </div>
</body>

</html>
