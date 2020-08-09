@extends('layout.site')
@section('title', 'Adicionar Missão - QG')
@section('cssheader')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Trumbowyg/2.21.0/ui/trumbowyg.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-datetimepicker/2.5.20/jquery.datetimepicker.css"/>
    @endsection
@section('content')
<form action="{{route('missoes.adicionar.create')}}" method="post" enctype="multipart/form-data">
    {{ csrf_field() }}
    @include('missoes._includes.form')
    <button type="submit">Enviar</button>
</form>
@endsection
@section('scriptsfooter')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Trumbowyg/2.21.0/trumbowyg.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-datetimepicker/2.5.20/jquery.datetimepicker.full.min.js"></script>
@endsection

