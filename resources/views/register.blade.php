@extends('layouts.header')

@section('title' . 'DevHouse')
@vite('resources/css/app.css')
@section('content')
    <div class="">
        <h1>Cadastre a casa</h1>
        <form action="/views" method="post" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="image">Imagem da casa:</label>
                <input type="file" id="image" name="image" class="form-control-file" required>
            </div>
            <div class="form-group">
                <label for="nome">Nome da casa</label>
                <input type="text" class="form-control" id="nome" name="nome" placeholder="Nome do evento">
            </div>
            <div class="form-group">
                <label for="valor">Valor:</label>
                <input type="text" class="form-control" id="valor" name="valor" required>
            </div>
            <div class="form-group">
                <label for="cidade">Cidade:</label>
                <input type="text" class="form-control" id="cidade" name="cidade" placeholder="Local do evento"
                    required>
            </div>
            <div class="form-group">
                <label for="descricao">Cidade:</label>
                <input type="text" class="form-control" id="descricao" name="descricao" placeholder="Local do evento"
                    required>
            </div>
            <input type="submit" class="btn btn-primary" value="Cadastrar">
        </form>
    </div>


@endsection
