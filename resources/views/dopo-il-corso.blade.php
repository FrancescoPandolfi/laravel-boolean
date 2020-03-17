@extends('layouts.app')

@section('content')
  <div class="container">
    <div class="card-wrapper">

      @foreach (config('students.students') as $card)

        <div class="card">
          {{$card['desc']}}
        </div>

      @endforeach

    </div>
  </div>

@endsection