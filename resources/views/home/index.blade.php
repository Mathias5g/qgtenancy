@extends('layout.site')
@section('title', 'Home - QG')
@section('csspersonalizado', 'css/missoes.css')
@section('scriptpersonalizado')
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" />

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/fullcalendar@5.1.0/main.css">

@section('content')
    <div style="width: 80%; height: 50%"  id='calendar'></div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/fullcalendar@5.1.0/main.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/fullcalendar@5.1.0/locales-all.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var calendarEl = document.getElementById('calendar');
            var calendar = new FullCalendar.Calendar(calendarEl, {
                locale: 'pt-br',
                initialView: 'dayGridMonth'
            });
            calendar.render();
        });
    </script>

@endsection
