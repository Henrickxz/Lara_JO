@extends('layout')

@section('content')
<div class="container mt-5">
    <h2>Cadastro de Jogo</h2>
    <form method="post" action="{{ route('cadastro-jogo') }}">
        @csrf
        <div class="form-group">
            <label for="nomeJogo">Nome do Jogo</label>
            <input type="text" class="form-control" id="nomeJogo" name="nomeJogo" placeholder="Digite o Nome do Jogo" required>
        </div>
        <div class="form-group">
            <label for="anoJogo">Ano do Jogo</label>
            <input type="text" class="form-control" id="anoJogo" name="anoJogo">
        </div>
        <div class="form-group">
            <label for="criadorJogo0">Nome do Criador</label>
            <input type="text" class="form-control" id="criadorJogo" name="criadorJogo" placeholder="Digite o Nome do Criador do Jogo" required>
        </div>
        <div class="form-group">
            <label for="medalhasJogo">Medalhas</label>
            <input type="number" class="form-control" id="medalhasJogo" name="medalhasJogo" placeholder="Digite a URL da Imagem" required>
        </div>
        <button type="submit" class="btn btn-primary">Cadastrar Jogo</button>
    </form>
</div>
@endsection