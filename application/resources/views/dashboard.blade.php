@extends('layouts.header')

@section('title' . 'DevHouse')
@section('content')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
    @vite('resources/css/app.css')

    <div class="flex flex-col justify-center items-center mt-3">
        <h1 class="text-3xl font-bold">Minhas casas</h1>
        <div>
            @if (count($houses) > 0)
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
                    @foreach ($houses as $house)
                        <div class="bg-white p-3 rounded-lg min-h-[400px] relative flex flex-col">
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
                                <div class="flex">
                                    <h2 class="text-lg font-bold">{{ $house->nome }} - </h2>
                                    </p>
                                </div>
                                <div>
                                    <p class="text-sm font-bold text-indigo-500 my-1">R$ {{ $house->valor }}</p>
                                    <span class="font-medium text-sm">{{ $house->descricao }}</span>
                                </div>
                                <div class="mt-5 flex">
                                    <a class="bg-blue-700 p-2 text-white font-bold rounded hover:bg-blue-800 duration-300"
                                        href="/edit/{{ $house->id }}">
                                        Editar
                                    </a>
                                    <form action="/houses/{{ $house->id }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit"
                                            class="bg-red-700 ml-3 p-2 text-white font-bold rounded hover:bg-red-800 duration-300">deletar</button>
                                    </form>
                                </div>
                            </div>
                    @endforeach
                </div>
        </div>
    @else
        <p>Você não tem casas cadastradas. Cadastrar casa? <a href="/create"
                class="text-sky-600 font-medium cursor-pointer">Cadastrar</a></p>
        @endif
    </div>
    </div>
@endsection
