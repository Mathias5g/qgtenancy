@extends('layout.site')
@section('title', 'Adicionar Missão - QG')
@section('cssheader')
    <link rel="stylesheet" href="{{asset('css/missoes.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Trumbowyg/2.21.0/ui/trumbowyg.min.css">
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
    <script>
        $('#trumbowyg-demo').trumbowyg();

        var count = 0;
        //addGroupSlots(count);

        function addGroupSlots(number) {
            var divSlots = `
            <div class="tr-slots" id="group-${count}">
            </div>
            `;
            var divGroup = `
            <div class="body-slots-groups">
                <h3>Grupo</h3>
                <div class="div-group">
                    <i class="fa fa-minus" aria-hidden="true"></i>
                    <input type="text" name="group-${count}[]" />
                </div>
            </div>`;
            var divMember = `
            <div class="body-slots-members" id="slot-${count}">
                <h3>Membros</h3>
                <div class="div-member">
                    <input type="text" name="group-${count}[]"/>
                    <i class="fa fa-minus" aria-hidden="true"></i>
                </div><span></span>
            </div>`;
            var buttonAddMemberSlots = `<button type="button" class="addSlot" id="addSlot-${count}"><i class="fa fa-plus" aria-hidden="true"></i>  Add slot</button>`;

            $('.slots').append(divSlots);
            $(`#group-${count}`).append(divGroup);
            $(`#group-${count}`).append(divMember);
            $(`#slot-${count}`).append(buttonAddMemberSlots);
        }

        function addNewSlot(number) {

        }

        /*Função cria o grupo*/
        $('#addGroup').click(function() {
            count++;
            addGroupSlots(count);
        });

        $(document).on('click', '.addSlot', function() {
            var team = `team-${count}`;
            var groupId = $(this).attr('id');
            var number = groupId.substring(8, 9);
            var divNewMember = `
                <div class="div-member">
                    <input type="text" name="group-${number}[]"/>
                    <i class="fa fa-minus" aria-hidden="true"></i>
                </div><span></span>
            `;
            $($(this)).before(divNewMember);
        })
    </script>
@endsection

