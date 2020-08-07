@extends('layout.site')
@section('title', 'Missões - QG')
@section('cssheader')
    <link rel="stylesheet" href="{{asset('css/missoes.css')}}">
@endsection
@section('content')
<h3>Lista de missões</h3>
<table class="table-missions">
    <thead>
        <tr>
            <th>Nome</th>
            <th>Tipo</th>
            <th>Data</th>
            @if (auth()->user()->permissions == 'admin' || auth()->user()->permissions == 'moderator')
            <th>Ações</th>
            @endif
        </tr>
    </thead>
    <tbody>
    @foreach ($missionData as $item)
    <tr>
    <th><a href="{{route('missoes.adicionar.detalhes', $item->slug)}}">{{$item->title}}</a></th>
        @switch($item->type)
            @case('Oficial')
                <th><p class="tipo-missao oficial">Oficial</p></th>
                @break
            @case('Treinamentos')
                <th><p class="tipo-missao treinamento">Treinamentos</p></th>
                @break
            @default
                <th><p class="tipo-missao fun">4Fun</p></th>
                @break
        @endswitch
        <th>{{ date('d/m/Y - H:i', strtotime($item->start))}}</th>
        @if (auth()->user()->permissions == 'admin' || auth()->user()->permissions == 'moderator')
        <th>
            <i class="fa fa-arrow-right go-page" aria-hidden="true" id="{{$item->slug}}"></i>
            <i class="fa fa-pencil edit" aria-hidden="true" id="{{$item->id}}"></i>
            <i class="fa fa-trash delete" aria-hidden="true" id="{{$item->id}}"></i></th>
        @else
            <th><i class="fa fa-arrow-right go-page" aria-hidden="true" onclick="erro()"></i></th>
        @endif
    </tr>
    @endforeach
    </tbody>
</table>

<!--div id="dialog-confirm" title="Empty the recycle bin?">
    <p>
        <span class="ui-icon ui-icon-alert" style="float:left; margin:12px 12px 20px 0;"></span>
        These items will be permanently deleted and cannot be recovered. Are you sure?
    </p>
</div-->

@if (auth()->user()->permissions == 'admin' || auth()->user()->permissions == 'moderator')
<a href="{{route('missoes.adicionar')}}"><button class="btn btn-blue" id='btn-missoes'>Cadastrar Missão</button></a>
@endif
@endsection
