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
