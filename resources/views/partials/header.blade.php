@php
$navBar = [
[
'name' =>'CHARACTERS',
'url' =>'/characters'
],
[
'name' =>'COMICS',
'url' =>'/comics',
'active' => true
],
[
'name' =>'MOVIES',
'url' =>'/movies'
],
[
'name' =>'TV',
'url' =>'/tv'
],
[
'name' =>'GAMES',
'url' => '/games'
],
[
'name' =>'COLLECTIBLES',
'url' =>'/collectibles'
],
[
'name' =>'VIDEOS',
'url' =>'/videos'
],
[
'name' =>'FANS',
'url' =>'/fans'
],
[
'name' =>'NEWS',
'url' =>'/news'
],
[
'name' =>'SHOP',
'url' =>'/shop'
],
];
@endphp
<header>
    <div class="header_top">

    </div>
    <div class="header_bottom">
        <div>
            <img src="{{ asset('img/dc-logo.png') }}" alt="">
        </div>
        <div>
            <ul>
                @foreach ($navBar as $element )
                <li>
                    <a :href="{{$element['url']}}">{{$element['name']}}</a>
                </li>
                @endforeach
            </ul>
        </div>
        <div>
            <input type="text" placeholder="Search">
        </div>
    </div>
</header>
