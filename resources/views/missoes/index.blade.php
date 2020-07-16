@extends('layout.site')
@section('title', 'Home - QG')
@section('cssheader')
    <link rel="stylesheet" href="{{asset('css/missoes.css')}}">
@endsection
@section('content')
<h3>Lista de missões</h3>
<h2>Nenhuma missão para exibir</h2>
<table class="table-missions">
    <thead>
        <tr>
            <th>Nome</th>
            <th>Descrição</th>
            <th>Tipo</th>
            <th>Data</th>
            <th>Status</th>
            @if ($permissoes == 'admin' || $permissoes == 'moderator')
            <th>Ações</th>
            @endif
        </tr>
    </thead>
    <tbody>
    <tr>
        <th>Jogatina Oficial</th>
        <th>Devemos localizar os inimigos</th>
        <th>Oficial</th>
        <th>09/07/2020 - 20:00</th>
        <th>Não jogada</th>
        @if ($permissoes == 'admin' || $permissoes == 'moderator')
        <th>Editar</th>
        @endif
    </tr>
    </tbody>
</table>
<button>Cadastrar Missão</button>
@endsection
