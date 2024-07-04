@extends('layouts.header')

@section('title' . 'DevHouse')
@section('content')
    @vite('resources/css/app.css')
    <div class="flex flex-col items-center justify-center">
        <h1 class="text-4xl font-semibold">Atualize a casa</h1>
        <form class="mt-6" action="/update/{{ $house->id }}" method="post" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div>
                <img src="/img/houses/{{ $house->image }}" alt="{{ $house->nome }}" class="max-w-36 rounded">
                <label for="image" class="block text-gray-700 font-bold mb-2">Imagem da casa:</label>
                <input type="file" id="image" name="image"
                    class="block w-full text-gray-700 border rounded py-2 px-3 leading-tight focus:outline-none focus:bg-white focus:border-blue-500"
                    >
            </div>
            <div class="form-group">
                <label for="nome" class="block text-gray-700 font-bold mb-2">Nome da casa</label>
                <input type="text"
                    class="block w-full text-gray-700 border rounded py-2 px-3 leading-tight focus:outline-none focus:bg-white focus:border-blue-500"
                    id="nome" name="nome" placeholder="Ex: Casa de praia" value="{{ $house->nome }}">
            </div>
            <div class="form-group">
                <label for="valor"class="block text-gray-700 font-bold mb-2">Valor:</label>
                <input type="text"
                    class="block w-full text-gray-700 border rounded py-2 px-3 leading-tight focus:outline-none focus:bg-white focus:border-blue-500"
                    id="valor" name="valor" placeholder="Ex: 12000" value="{{ $house->valor }}">
            </div>
            <div class="form-group">
                <label for="cidade" class="block text-gray-700 font-bold mb-2">Local:</label>
                <input type="text"
                    class="block w-full text-gray-700 border rounded py-2 px-3 leading-tight focus:outline-none focus:bg-white focus:border-blue-500"
                    id="cidade" name="cidade" placeholder="Ex: Fortaleza - CE" value="{{ $house->cidade }}">
            </div>
            <div class="form-group">
                <label for="descricao" class="block text-gray-700 font-bold mb-2">Descrição:</label>
                <input type="text"
                    class="block w-full text-gray-700 border rounded py-2 px-3 leading-tight focus:outline-none focus:bg-white focus:border-blue-500"
                    id="descricao" name="descricao" placeholder="Ex: 4 quartos - 2 banheiros"
                    value="{{ $house->descricao }}">
            </div>
            <div class="flex items-center justify-center mt-6">
                <input type="submit"
                    class="cursor-pointer mb-5 bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline"
                    value="Atualizar">
            </div>
        </form>
    </div>


@endsection
