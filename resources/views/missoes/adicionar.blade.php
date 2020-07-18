@extends('layout.site')
@section('title', 'Adicionar Missão - QG')
@section('cssheader')
    <link rel="stylesheet" href="{{asset('css/missoes.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Trumbowyg/2.21.0/ui/trumbowyg.min.css">
@endsection
@section('content')
<form action="#" method="post" enctype="multipart/form-data">
    {{ csrf_field() }}
    @include('missoes._includes.form')
    <button type="submit">Enviar</button>
</form>
@endsection
@section('scriptsfooter')
<script src="https://cdnjs.cloudflare.com/ajax/libs/Trumbowyg/2.21.0/trumbowyg.min.js"></script>
    <script>
        $('#trumbowyg-demo').trumbowyg();
        $('#new-team').click(() => {
            alert('ok')
        })
    </script>
@endsection

