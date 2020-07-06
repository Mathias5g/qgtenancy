@extends('layout.site')
@section('titulo', 'Missões')


@section('conteudo')
    @for($i=0; $i < count($dados); $i++);
        <h3>{{$dados[$i]['nome']}}</h3>
        <h3>{{$dados[$i]['idade']}}</h3>
    @endfor
@endsection
