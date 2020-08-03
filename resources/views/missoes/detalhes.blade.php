@extends('layout.site')
@section('title', 'Detalhes - QG')
@section('cssheader')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/fullcalendar@5.1.0/main.css">
@endsection
@section('content')
    <h1>{{$missionData->title}}</h1>
    <img src="{{$missionData->image}}" alt="{{$missionData->title}}">
    @for ($i = 0; $i < count($slots); $i++)
        @for ($f = 0; $f < count($slots[$i]); $f++)
            @if($slots[$i][$f] == $slots[$i][0])
             <h1>{{$slots[$i][$f]}}</h1>
            @endif
            @if($slots[$i][$f] != $slots[$i][0])
             <h1>{{$slots[$i][$f]}}</h1><button>INCREVER-SE</button>
            @endif

        @endfor
    @endfor
@endsection

@section('scriptsfooter')
@endsection
