@extends('layouts.app')

@section('content')
  <div class="container">
    <div class="card-wrapper">

      <div class="card">
        <div class="data-wrapper">

            <img src="{{$student['img']}}" alt="{{$student['nome']}}">
            <div class="data">
                <h3>
                    {{$student['nome']}} ({{$student['eta']}}) anni
                </h3>
                <h4>Assunt{{($student['sesso'] == 'm') ? 'o' : 'a'}} da {{$student['azienda']}} come {{$student['ruolo']}}</h4>
            </div>

        </div>
        <p>{{$student['desc']}}</p>

    </div>

    </div>
  </div>
  



@endsection