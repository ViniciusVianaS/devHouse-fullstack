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
            <div class="flex items-center bg-slate-100 px-3 py-2 w-full max-w-[300px] lg:max-w-[50%] rounded-lg lg:mr-8">
                <i class="fa fa-search text-gray-500" style="font-size:16px"></i>
                <input type="text" class="w-full bg-slate-100 px-2 border-none focus:outline-none"
                    placeholder="Pesquise aqui">
            </div>
            <nav class="mr-auto ml-3">
                <a href="/" title="Home"
                    class="text-gray-500 font-medium hover:text-black hover:bg-gray-100 p-2 rounded-lg duration-300">
                    <i class="fa fa-home" style="font-size: 26px;"></i>
                </a>
                <a href="/create" title="Cadastrar casa"
                    class="text-gray-500 font-medium hover:text-black hover:bg-gray-100 p-2 rounded-lg duration-300 mt-[2px] md:ml-4 ml-1">
                    <i class="fa fa-plus" style="font-size: 22px;"></i>
                </a>
            </nav>
            <div class="flex gap-3 items-center">
                @auth
                    <a href="/dashboard" title="Minhas casas"
                        class="bg-sky-500 hover:bg-sky-600 cursor-pointer duration-300 text-white flex items-center justify-center gap-2 px-4 py-2 rounded font-medium ml-3">
                        <span class="hidden md:flex">Minhas casas</span>
                        <i class="fa fa-home  md:ml-1" style="font-size:18px"></i>
                    </a>
                    <li class="list-none">
                        <form action="/logout" method="POST">
                            @csrf
                            <a href="/logout" title="Sair" 
                             onclick="event.preventDefault();
                             this.closest('form').submit();"
                             class="bg-rose-500 hover:bg-rose-600 cursor-pointer duration-300 text-white flex items-center justify-center gap-2 px-4 py-2 rounded font-medium ml-3">
                                <span class="hidden md:flex">Sair</span>
                            </a>
                        </form>
                    </li>
                @endauth
                @guest
                    <a href="/login" title="Login"
                        class="bg-rose-500 hover:bg-rose-600 cursor-pointer duration-300 text-white flex items-center justify-center gap-2 px-4 py-2 rounded font-medium ml-3">
                        <span class="hidden md:flex">Login</span>
                        <i class="fa fa-user  md:ml-1" style="font-size:18px"></i>
                    </a>
                    <a href="/register" title="Cadastrar"
                        class="bg-sky-500 hover:bg-sky-600 cursor-pointer duration-300 text-white flex items-center justify-center gap-2 px-4 py-2 rounded font-medium ml-3">
                        <span class="hidden md:flex">Cadastrar-se</span>
                        <i class="fa fa-plus  md:ml-1" style="font-size:18px"></i>
                    </a>
                @endguest
            </div>
        </header>
    </div>
    @yield('content')
</body>

</html>