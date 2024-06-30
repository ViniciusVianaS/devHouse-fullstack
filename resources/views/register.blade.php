@extends('layouts.header')

@section('title' . 'DevHouse')
@vite('resources/css/app.css')
@section('content')
    <div class="flex flex-col items-center justify-center">
        <h1 class="text-4xl font-semibold">Cadastre a casa</h1>
        <form class="mt-6" action="/views" method="post" enctype="multipart/form-data">
            @csrf
            <div>
                <label for="image" class="block text-gray-700 font-bold mb-2">Imagem da casa:</label>
                <input type="file" id="image" name="image" class="block w-full text-gray-700 border rounded py-2 px-3 leading-tight focus:outline-none focus:bg-white focus:border-blue-500" required>
            </div>
            <div class="form-group">
                <label for="nome" class="block text-gray-700 font-bold mb-2">Nome da casa</label>
                <input type="text" class="block w-full text-gray-700 border rounded py-2 px-3 leading-tight focus:outline-none focus:bg-white focus:border-blue-500" id="nome" name="nome" placeholder="Nome da casa" required>
            </div>
            <div class="form-group">
                <label for="valor"class="block text-gray-700 font-bold mb-2">Valor:</label>
                <input type="text" class="block w-full text-gray-700 border rounded py-2 px-3 leading-tight focus:outline-none focus:bg-white focus:border-blue-500" id="valor" name="valor" placeholder="Cidade da casa" required>
            </div>
            <div class="form-group">
                <label for="cidade" class="block text-gray-700 font-bold mb-2">Cidade:</label>
                <input type="text" class="block w-full text-gray-700 border rounded py-2 px-3 leading-tight focus:outline-none focus:bg-white focus:border-blue-500" id="cidade" name="cidade" placeholder="Cidade da casa"
                    required>
            </div>
            <div class="form-group">
                <label for="descricao" class="block text-gray-700 font-bold mb-2">Descrição:</label>
                <input type="text" class="block w-full text-gray-700 border rounded py-2 px-3 leading-tight focus:outline-none focus:bg-white focus:border-blue-500" id="descricao" name="descricao" placeholder="Descrição da casa"
                    required>
            </div>
            <div class="flex items-center justify-center mt-6">
                <input type="submit" class="btn btn-primary bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" value="Cadastrar">
            </div>
        </form>
    </div>


@endsection
