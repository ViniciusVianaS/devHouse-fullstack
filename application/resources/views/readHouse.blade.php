@extends('layouts.header')

@section('title' . 'DevHouse')
@section('content')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
    @vite('resources/css/app.css')
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
        <div class="flex flex-col items-center justify-center">
            <div class="bg-white p-3 rounded-lg min-h-[400px] relative flex flex-col">
                <div class="group overflow-hidden rounded-t-lg">
                    <div class="absolute z-40 top-5 left-5">
                        <div
                            class="flex bg-slate-50/70 group-hover:bg-white duration-300 self-start items-center justify-center gap-2 px-3 py-1 rounded-full">
                            <i class="fa fa-map" style="font-size: 12px;"></i>
                            <p class="font-medium text-sm">{{ $house->cidade }}</p>
                        </div>
                    </div>
                    <img class="max-w-[100%] rounded-lg w-full h-64 object-cover group-hover:scale-110 duration-300"
                        src="/img/houses/{{ $house->image }}" alt="{{ $house->nome }}">
                </div>
                <div class="w-full flex flex-col gap-1 my-2">
                    <div class="flex">
                        <h2 class="text-lg font-bold">{{ $house->nome }} - </h2>
                        <p class="text-sm font-bold my-1 ml-1 mt-[5px]">Proprietario: {{ $houseOwner['name'] }}</p>
                    </div>
                    <div>
                        <p class="text-sm font-bold text-indigo-500 my-1">R$ {{ $house->valor }}</p>
                        <span class="font-medium text-sm">{{ $house->descricao }}</span>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
