@extends('layout.site')
@section('title', 'Adicionar Missão - QG')
@section('cssheader')
    <link rel="stylesheet" href="{{asset('css/missoes.css')}}">
@endsection
@section('content')
<form action="">
    {{ csrf_field() }}
    @include('missoes._includes.form')
</form>
@endsection
