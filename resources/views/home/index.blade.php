@extends('layout.site')
@section('title', 'Home - QG')
@section('cssheader')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/fullcalendar@5.1.0/main.css">
@endsection
@section('content')
    <div id='calendar'></div>
@endsection

@section('scriptsfooter')
    <script src="https://cdn.jsdelivr.net/npm/fullcalendar@5.1.0/main.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/fullcalendar@5.1.0/locales-all.js"></script>
@endsection
