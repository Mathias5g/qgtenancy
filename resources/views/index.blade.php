@extends('layout.site')
@section('title', 'Home - QG')
@section('csspersonalizado', 'css/missoes.css')
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
            <th>Ações</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <th>Jogatina Oficial</th>
            <th>Devemos localizar os inimigos</th>
            <th>Oficial</th>
            <th>09/07/2020 - 20:00</th>
            <th>Não jogada</th>
            <th>Editar</th>
        </tr>
        </tbody>
    </table>
    <button>Cadastrar Missão</button>
@endsection
