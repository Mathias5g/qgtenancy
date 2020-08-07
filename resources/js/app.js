require('./bootstrap');
const urlAtual = window.location.pathname;

if(urlAtual == '/home'){
    document.addEventListener('DOMContentLoaded', function() {
        const calendarEl = document.getElementById('calendar');
        const calendar = new FullCalendar.Calendar(calendarEl, {
            timeZone: 'America/Sao_Paulo',
            events: '/missoes/datejson',
            locale: 'pt-br',
            initialView: 'dayGridMonth',
            height: 'auto'
        });
        calendar.render();
    });
}

if(urlAtual == '/missoes') {
    const goPage = $('.go-page');
    const editPage = $('.edit');
    const deletePage = $('.delete');

    goPage.on('click', function() {
        window.location.href = `missoes/detalhes/${$(this).attr('id')}`;
    });

    editPage.on('click', function() {
        /*$("#dialog-confirm").dialog({
            resizable: false,
            height: "auto",
            width: 400,
            modal: true,
            buttons: {
              "Delete all items": function() {
                  alert("Itens deletados");
                $(this).dialog( "close" );
              },
              Cancel: function() {
                alert("Cancelado");
                $(this).dialog( "close" );
              }
            }
          });*/
    })

    deletePage.on('click', function() {
        window.location.href = `missoes/detalhes/${$(this).attr('id')}/deletar`;
    })
}

if(urlAtual == '/missoes/adicionar') {
    $('#datetimepicker').datetimepicker({
        format:'Y-m-d H:i',
        lang:'pt-br'
        });
        ///missoes/adicionar - path

        $('#trumbowyg-demo').trumbowyg();

        var count = 0;
        console.log(count);
        addGroupSlots(count);

        function addGroupSlots(number) {
            var divSlots = `
            <div class="tr-slots" id="group${count}">
            </div>
            `;
            var divGroup = `
            <div class="body-slots-groups">
                <h3>Grupo</h3>
                <div class="div-group">
                    <i class="fa fa-minus" aria-hidden="true"></i>
                    <input type="text" name="group${count}[]" required/>
                </div>
            </div>`;
            var divMember = `
            <div class="body-slots-members" id="slot${count}">
                <h3>Membros</h3>
                <div class="div-member">
                    <input type="text" name="group${count}[]" required/>
                    <i class="fa fa-minus" aria-hidden="true"></i>
                </div><span></span>
            </div>`;
            var buttonAddMemberSlots = `<button type="button" class="addSlot" id="addSlot-${count}"><i class="fa fa-plus" aria-hidden="true"></i>  Add slot</button>`;

            $('.slots').append(divSlots);
            $(`#group${count}`).append(divGroup);
            $(`#group${count}`).append(divMember);
            $(`#slot${count}`).append(buttonAddMemberSlots);
        }

        /*Função cria o grupo*/
        $('#addGroup').click(function() {
            count++;
            addGroupSlots(count);
            console.log(count);
            $('.groups').val(count+1);

            if($('.groups').val() == 1 && count == 1){
                $('.groups').val(2);
            }

        });

        $(document).on('click', '.addSlot', function() {
            var team = `team-${count}`;
            var groupId = $(this).attr('id');
            var number = groupId.substring(8, 9);
            var divNewMember = `
                <div class="div-member">
                    <input type="text" name="group${number}[]" required/>
                    <i class="fa fa-minus" aria-hidden="true"></i>
                </div><span></span>
            `;
            $($(this)).before(divNewMember);
        })
}




