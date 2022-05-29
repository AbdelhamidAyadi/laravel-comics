@php
     $menu =[
        [
        'name' =>'DIGITAL COMICS',
        'url' =>'/digital_comics',
        'img'=>'buy-comics-digital-comics.png'
        ],
        [
        'name' =>'DC MERCHANDISE',
        'url' =>'/dc_merchandise',
        'img' =>'buy-comics-merchandise.png'
         ],
        [
        'name' =>'SUBSCRIPTION',
        'url' =>'/subscription',
        'img' =>'buy-comics-subscriptions.png'

        ],
        [
        'name' =>'COMIC SHOP LOCATOR',
        'url' =>'/comic_shop_locator',
        'img' =>'buy-comics-shop-locator.png'
        ],
        [
        'name' =>'DC POWER VISA',
        'url' =>'/dc_power_visa',
        'img' =>'buy-dc-power-visa.svg'
        ],
        
      ]
@endphp
@extends('layout.layout')
@section('main')

<div class="jumbotron">
    <p>CURRENT SERIES</p>
</div>
<div class="cards">
    @foreach ($comics as $key => $card)
    <a href=" {{$key}} ">
        <div class="card">
            <img src="{{$card['thumb']}}">
            <a href=" {{$key}}">{{ $card['series'] }}</a>
          </div>
    </a>
    @endforeach

    <div class="load-more">
        <p>LOAD MORE</p>
    </div>
</div>
<div class="menu">
    
    <ul>
        @foreach ($menu as $element)
        <li><img src="{{ asset('images/' . $element['img'] ) }}" ><a href="{{  $element['url'] }}">{{ $element['name']}}</a></li>
        @endforeach
    </ul>
  
</div>


@endsection
