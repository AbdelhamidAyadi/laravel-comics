@extends('layout.layout')
@section('main')

<div class="jumbotron">
    <p>CURRENT SERIES</p>
</div>
<div class="cards">
    @foreach ($comics as $card)
    <div class="card">
        <img src="{{$card['thumb']}}">
        <a href="">{{ $card['series'] }}</a>
      </div>
    @endforeach

    <div class="load-more">
        <p>LOAD MORE</p>
    </div>
</div>


@endsection
