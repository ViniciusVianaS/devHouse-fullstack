@extends('layouts.header')

@section('title' . 'DevHouse')
@section('content')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
    @vite('resources/css/app.css')

    <main class="w-full fle flex-col pb-4">
        <aside class="w-full px-3 lg:px-6">
            <div class="flex w-full items-baseline justify-between">
                <h1 class="font-bold text-3x1 mb-6 mt-4">Compre ou Alugue</h1>
                <span class="hidden md:block text-gray-600">Casas encontradas</span>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
                <a href="#"
                    class="bg-white p-3 rounded-lg min-h-[400px] relative flex flex-col hover:shadow-lg duration-300">
                    <div>
                        <div class="group overflow-hidden rounded-t-lg">
                            <div class="absolute z-40 top-5 left-5">
                                <div
                                    class="flex bg-slate-50/70 group-hover:bg-white duration-300 self-start items-center justify-center gap-2 px-3 py-1 rounded-full">
                                    <i class="fa fa-map" style="font-size: 12px;"></i>
                                    <p class="font-medium text-sm">Fortaleza - CE</p>
                                </div>
                            </div>
                            <img src="/img/casa1.png" alt="imagem da casa">
                        </div>
                        <div class="w-full flex flex-col gap-1 my-2">
                            <h2 class="text-lg font-bold">Casa de praia</h2>
                            <div>
                                <p class="text-sm font-bold text-indigo-500 my-1">5000 R$/mês</p>
                            </div>
                        </div>
                    </div>
                    <div class="mt-auto">
                        <span class="font-medium text-sm">1200 metros -</span>
                        <span class="font-medium text-sm">4 quartos -</span>
                        <span class="font-medium text-sm">2 banheiros</span>
                    </div>
                </a>
                <a href="#"
                    class="bg-white p-3 rounded-lg min-h-[400px] relative flex flex-col hover:shadow-lg duration-300">
                    <div>
                        <div class="group overflow-hidden rounded-t-lg">
                            <div class="absolute z-40 top-5 left-5">
                                <div
                                    class="flex bg-slate-50/70 group-hover:bg-white duration-300 self-start items-center justify-center gap-2 px-3 py-1 rounded-full">
                                    <i class="fa fa-map" style="font-size: 12px;"></i>
                                    <p class="font-medium text-sm">Fortaleza - CE</p>
                                </div>
                            </div>
                            <img src="/img/casa1.png" alt="imagem da casa">
                        </div>
                        <div class="w-full flex flex-col gap-1 my-2">
                            <h2 class="text-lg font-bold">Casa de praia</h2>
                            <div>
                                <p class="text-sm font-bold text-indigo-500 my-1">5000 R$/mês</p>
                            </div>
                        </div>
                    </div>
                    <div class="mt-auto">
                        <span class="font-medium text-sm">1200 metros -</span>
                        <span class="font-medium text-sm">4 quartos -</span>
                        <span class="font-medium text-sm">2 banheiros</span>
                    </div>
                </a>
                <a href="#"
                    class="bg-white p-3 rounded-lg min-h-[400px] relative flex flex-col hover:shadow-lg duration-300">
                    <div>
                        <div class="group overflow-hidden rounded-t-lg">
                            <div class="absolute z-40 top-5 left-5">
                                <div
                                    class="flex bg-slate-50/70 group-hover:bg-white duration-300 self-start items-center justify-center gap-2 px-3 py-1 rounded-full">
                                    <i class="fa fa-map" style="font-size: 12px;"></i>
                                    <p class="font-medium text-sm">Fortaleza - CE</p>
                                </div>
                            </div>
                            <img src="/img/casa1.png" alt="imagem da casa">
                        </div>
                        <div class="w-full flex flex-col gap-1 my-2">
                            <h2 class="text-lg font-bold">Casa de praia</h2>
                            <div>
                                <p class="text-sm font-bold text-indigo-500 my-1">5000 R$/mês</p>
                            </div>
                        </div>
                    </div>
                    <div class="mt-auto">
                        <span class="font-medium text-sm">1200 metros -</span>
                        <span class="font-medium text-sm">4 quartos -</span>
                        <span class="font-medium text-sm">2 banheiros</span>
                    </div>
                </a>
            </div>
        </aside>
    </main>

@endsection
