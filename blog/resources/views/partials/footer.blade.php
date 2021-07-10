
<?php 

$footer_menu = [
    [
        'text' => 'Home',
    ],
    [
        'text' => 'Characters',
    ],
    [
        'text' => 'Comics',
    ],
    [
        'text' => 'Movies',
    ],
    [
        'text' => 'TV',
    ],
    [
        'text' => 'Games',
    ],
    [
        'text' => 'Fans',
    ],
];
$dc_shop=[
    [
        'text' => 'Shop DC'
    ],
    [
        'text' => 'Shop DC Collectibles'
    ],
];
$dc = [
    [
        'text' => 'Terms Of Use'
    ],
    [
        'text' => 'Privacy policy (New)'
    ],
    [
        'text' => 'Ad Choices'
    ],
    [
        'text' => 'Advertising'
    ],
    [
        'text' => 'Jobs'
    ],
    [
        'text' => 'Subscriptions'
    ],
    [
        'text' => 'Talent Workshop'
    ],
    [
        'text' => 'CPSC Certificates'
    ],
    [
        'text' => 'Ratings'
    ],
    [
        'text' => 'Shop Help'
    ],
    [
        'text' => 'Contact Us'
    ],
];
$sites =[
    [
        'text' => 'DC'
    ],
    [
        'text' => 'MAD Magazine'
    ],
    [
        'text' => 'DC Kids'
    ],
    [
        'text' => 'DC Universe'
    ],
    [
        'text' => 'DC Power Visa'
    ],
    
]
?>

<footer>
    <div class="container">
        <div class="left-footer">
            <div class="dc-comcis">
                <h1>DC COMICS</h1>
                <ul>
                    @foreach($footer_menu as $footer_item)
                        <li><a href="">{{$footer_item['text']}}</a></li>
                    @endforeach
                </ul>
            </div>
           <div class="dc-shop">
                <h1>DC Shop</h1>
                <ul>
                    @foreach($dc_shop as $item)
                        <li><a href="">{{$item['text']}}</a></li>
                    @endforeach
                </ul>
           </div>
        </div>
        <div class="central-footer">
            <div class="dc-shop">
                <h1>DC</h1>
                <ul>
                    @foreach($dc as $item)
                        <li><a href="">{{$item['text']}}</a></li>
                    @endforeach
                </ul>
            </div>
        </div>
        <div class="right-footer">
            <div class="sites">
                <h1>SITES</h1>
                <ul>
                    @foreach($sites as $item)
                        <li><a href="">{{$item['text']}}</a></li>
                    @endforeach
                </ul>
            </div>
        </div>
        <div class="logo-footer">
            <img src="{{asset('img/dc-logo-bg.png')}}" alt="">
        </div>
    </div>

</footer>