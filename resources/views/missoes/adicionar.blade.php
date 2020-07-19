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

        var count = 0;
        addGroupSlots(count);
        function addGroupSlots(number) {
            var trSlots = `<div class="tr-slots" id="group-${count}"></div>`;
            var trGroup = '<div class="body-slots-groups"><h3>Grupo</h3><div class="div-group"><i class="fa fa-minus" aria-hidden="true"></i><input type="text" name="group[]" /></div></>';
            var trMember = `<div class="body-slots-members" id="slot-${count}"><h3>Membros</h3><div class="div-member"><input type="text" name="member[]"/><i class="fa fa-minus" aria-hidden="true"></i></div><span></span></div>`;
            var trMemberSlots = '<button type="button" id="addSlot"><i class="fa fa-plus" aria-hidden="true"></i>  Add slot</button>';

            $('.slots').append(trSlots);
            $(`#group-${count}`).append(trGroup);
            $(`#group-${count}`).append(trMember);
            $(`#slot-${count}`).append(trMemberSlots);
        }

        $('#addGroup').click(function() {
            addGroupSlots(count);
            count++;
        });

        $('#addSlot').click(function() {
            var trNewMember = `<div class="div-member"><input type="text" name="member[]"/><i class="fa fa-minus" aria-hidden="true"></i></div><span></span>`;
            $(`#addSlot`).before(trNewMember);
            console.log(count)
        });
    </script>
@endsection

