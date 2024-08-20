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
                @foreach ($houses as $house)
                    <a href="/houses/{{ $house->id }}"
                        class="bg-white p-3 rounded-lg min-h-[400px] relative flex flex-col hover:shadow-lg duration-300">
                        <div>
                            <div class="group overflow-hidden rounded-t-lg">
                                <div class="absolute z-40 top-5 left-5">
                                    <div
                                        class="flex bg-slate-50/70 group-hover:bg-white duration-300 self-start items-center justify-center gap-2 px-3 py-1 rounded-full">
                                        <i class="fa fa-map" style="font-size: 12px;"></i>
                                        <p class="font-medium text-sm">{{ $house->cidade }}</p>
                                    </div>
                                </div>
                                <img class="rounded-lg w-full h-64 object-cover group-hover:scale-110 duration-300"
                                    src="/img/houses/{{ $house->image }}" alt="{{ $house->nome }}">
                            </div>
                            <div class="w-full flex flex-col gap-1 my-2">
                                <h2 class="text-lg font-bold">{{ $house->nome }}</h2>
                                <div>
                                    <p class="text-sm font-bold text-indigo-500 my-1">R$ {{ $house->valor }}</p>
                                </div>
                            </div>
                        </div>
                        <div class="mt-auto">
                            <span class="font-medium text-sm">{{ $house->descricao }}</span>
                        </div>
                    </a>
                @endforeach
            </div>
        </aside>
    </main>

@endsection
