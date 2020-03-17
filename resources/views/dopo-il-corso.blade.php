@extends('layouts.app')


@section('content')
    <div class="container">
        <div class="card-wrapper">

            @foreach (config('students.students') as $key => $card)
                <div class="card">
                    <div class="data-wrapper">

                        <img src="{{$card['img']}}" alt="{{$card['nome']}}">
                        <div class="data">
                            <h3>
                                <a href="{{route('student.show', ['id' => $key])}}">{{$card['nome']}}</a> ({{$card['eta']}}) anni
                            </h3>
                            <h4>Assunt{{($card['sesso'] == 'm') ? 'o' : 'a'}} da {{$card['azienda']}} come {{$card['ruolo']}}</h4>
                        </div>

                    </div>
                    <p>{{$card['desc']}}</p>

                </div>

            @endforeach

        </div>
    </div>

@endsection

