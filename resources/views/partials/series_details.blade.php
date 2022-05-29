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
<div class="jumbotron_details_page">
    <div class="blue_stripe">
        <div class="img_container">
            <img src="{{$comic['thumb']}}">
            <p>Comic book</p>
            <p>View gallery</p>
        </div>
    </div>

</div>
<div class="card_details_page">
    <div class="card_details">
        <h2>
            {{$comic['title']}}
        </h2>
        <div class="price_stripe my-5">
            <div class="px-4">
                <span>U.S. Price:{{$comic['price']}}</span>
                <span>AVAILABLE</span>
            </div>
            <div>
                Check Availability<i class="fa-solid fa-caret-down "></i>
            </div>
        </div>
        <p>
            {{$comic['description']}}  
        </p>
    </div>
    <div>
        <img src="{{ asset('images/advertisement.png') }}" alt="">
    </div>
</div>

<div class="menu_details_page">

    <ul>
        @foreach ($menu as $element)
        <li><img src="{{ asset('images/' . $element['img'] ) }}"><a
                href="{{  $element['url'] }}">{{ $element['name']}}</a></li>
        @endforeach
    </ul>

</div>


@endsection
