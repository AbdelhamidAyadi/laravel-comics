@php
          $dcComics = [[
            'name' => 'Characters',
            'url' => '/characters'
          ],
          [
            'name' => 'Comics',
            'url' => '/comics'
          ],
          [
            'name' => 'Movies',
           'url' => '/movies'
          ],
          [
            'name' => 'TV',
           'url' => '/tv'
          ],
          [
            'name' => 'Games',
           'url' => '/games'
          ],
          [
            'name' => 'Videos',
           'url' => '/videos'
          ],
          [
            'name' => 'News',
           'url' => '/news'
          ],
];
        $shop = [[
          'name' => 'Shop DC',
          'url' => '/shop_dc'
          ],
          [
          'name' => 'Shop DC Collectibles',
          'url' => '/shop_dc_collectibles'
          ],
];
        $dc = [[
            'name' => 'Terms Of Use',
           'url' => '/terms_of_use'
          ],
          [
            'name' => 'Privacy Policy (New)',
           'url' => '/privacy_policy'
          ],
          [
            'name' => 'Ad Choises',
           'url' => '/ad_choises'
          ],
          [
            'name' => 'Advertising',
           'url' => '/advertising'
          ],
          [
            'name' => 'Jobs',
           'url' => '/privacy_policy'
          ],
          [
            'name' => 'Subscriptions',
           'url' => '/subscriptions'
          ],
          [
            'name' => 'Talent Workshops',
           'url' => '/talent_workshops'
          ],
          [
            'name' => 'CPSC Certificates',
           'url' => '/cpsc_certificates'
          ],
          [
            'name' => 'Ratings',
           'url' => '/ratings'
          ],
          [
            'name' => 'Shop Help',
           'url' => '/shop_help'
          ],
          [
            'name' => 'Contact Us',
           'url' => '/contact_us'
          ],
];
        $sites = [[
            'name' => 'DC',
           'url' => '/dc'
          ],
          [
            'name' => 'MAD Magazine',
           'url' => '/mad_magazine'
          ],
          [
            'name' => 'DC Kids',
           'url' => '/dc_kids'
          ],
          [
            'name' => 'DC Universe',
           'url' => '/dc_universe'
          ],
          [
            'name' => 'DC Power Visa',
           'url' => '/dc_power_visa'
          ],
];
@endphp
<footer>
    <div class="container1">
        <div class="container2">
          <div class="container3">
            <h3>DC COMICS</h3>
            <ul>
              @foreach ( $dcComics as $item)
              <li ><a href="{{ $item['url'] }}">{{$item['name']}}</a></li>
              @endforeach
            </ul>
            <h3>SHOP</h3>
            <ul>
              @foreach ($shop as $item)
               <li ><a href="{{$item['url']}}">{{$item['name']}}</a></li>
              @endforeach
            </ul>
          </div>
          <div class="container3">
            <h3>DC</h3>
            <ul>
              @foreach ($dc as $item)
              <li ><a href="{{$item['url']}}">{{$item['name']}}</a></li>
              @endforeach
            </ul>
          </div>
          <div class="container3">
            <h3>SITES</h3>
            <ul>
              @foreach ($sites as $item)
              <li ><a href="{{$item['url']}}">{{$item['name']}}</a></li>
              @endforeach
            </ul>
          </div>
        </div>
        <div class="logo_background">

        </div>
      </div>
</footer>
<div class="social_container">

  <div>
    <h3>
      SIGN-UP NOW!
    </h3>
  </div>
  <div class="container2">
    <h4>
      FOLLOW US
    </h4>
    <img src="../images/footer-facebook.png" alt="logo facebook">
    <img src="../images/footer-twitter.png" alt="logo facebook">
    <img src="../images/footer-youtube.png" alt="logo facebook">
    <img src="../images/footer-pinterest.png" alt="logo facebook">
    <img src="../images/footer-periscope.png" alt="logo facebook">
  </div>

</div>