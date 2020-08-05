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
        alert('ok');
    })

    deletePage.on('click', function() {
        window.location.href = `missoes/detalhes/${$(this).attr('id')}/deletar`;
    })
}




