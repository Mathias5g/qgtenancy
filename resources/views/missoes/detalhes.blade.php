@extends('layout.site')
@section('title', 'Detalhes - QG')
@section('content')
    <div class="mission-info">
        <h1>{{$missionData->title}}</h1>
        <img src="{{$missionData->image}}" alt="{{$missionData->title}}">
    </div>
    <div class="mission-slot">
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
    </div>

@endsection

@section('scriptsfooter')
@endsection
