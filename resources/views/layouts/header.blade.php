<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
    @vite('resources/css/app.css')
    <title>@yield('title')</title>
</head>

<body>
    <div>
        <header class="bg-white py-5 px-3 w-full top-0 flex flex-row items-center justify-between">
            <div class="flex items-center bg-slate-100 px-3 py-2 w-full max-w-ls lg:max-w-[50%] rounded-lg lg:mr-8">
                <i class="fa fa-search text-gray-500" style="font-size:16px"></i>
                <input type="text" class="w-full bg-slate-100 px-2 outline-none" placeholder="Pesquise aqui">
            </div>
            <nav class="mr-auto hidden md:flex">
                <a href="/"
                    class="text-gray-500 font-medium hover:text-black hover:bg-gray-100 p-2 rounded-lg duration-300">
                    Home
                </a>
                <a href="/register"
                    class="text-gray-500 font-medium hover:text-black hover:bg-gray-100 p-2 rounded-lg duration-300">
                    Cadastrar casa
                </a>
                <a href="#"
                    class="text-gray-500 font-medium hover:text-black hover:bg-gray-100 p-2 rounded-lg duration-300">
                    Compras
                </a>
                <a href="#"
                    class="text-gray-500 font-medium hover:text-black hover:bg-gray-100 p-2 rounded-lg duration-300">
                    Favoritos
                </a>
            </nav>
            <div class="flex gap-3 items-center">
                <button
                    class="bg-rose-500 hover:bg-rose-600 duration-300 text-white flex items-center justify-center gap-2 px-4 py-2 rounded font-medium">
                    <span class="hidden md:flex">Sign In</span>
                    <i class="fa fa-user  md:ml-1" style="font-size:18px"></i>
                </button>
            </div>
        </header>
    </div>
    @yield('content')
</body>

</html>
