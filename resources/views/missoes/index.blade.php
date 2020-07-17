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
            @if ($permissoes == 'admin' || $permissoes == 'moderator')
            <th>Ações</th>
            @endif
        </tr>
    </thead>
    <tbody>
    @foreach ($missionsData as $item)
    <tr>
        <th>{{$item->title}}</th>
        <th>Devemos localizar os inimigos</th>
        @switch($item->type)
            @case('Oficial')
                <th><p class="tipo-missao oficial">Oficial</p></th>
                @break
            @case('4Fun')
                <th><p class="tipo-missao treinamento">Treinamentos</p></th>
                @break
            @default
                <th><p class="tipo-missao fun">4Fun</p></th>
                @break
        @endswitch
        <th>{{$item->start}}</th>
        @if ($permissoes == 'admin' || $permissoes == 'moderator')
        <th>Editar</th>
        @endif
    </tr>
    @endforeach
    </tbody>
</table>
@if ($permissoes == 'admin' || $permissoes == 'moderator')
<button class="btn btn-blue">Cadastrar Missão</button>
@endif
@endsection
