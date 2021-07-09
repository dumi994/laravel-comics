<?php 
$menu = [
    [
        'href' => route('home'),
        'text' => 'Home',
    ],
    [
        'href' => route('characters'),
        'text' => 'Characters',
    ],
    [
        'href' => route('comics'),
        'text' => 'Comics',
    ],
    [
        'href' => route('movies'),
        'text' => 'Movies',
    ],
    [
        'href' => route('tv'),
        'text' => 'TV',
    ],
    [
        'href' => route('games'),
        'text' => 'Games',
    ],
    [
        'href' => route('fans'),
        'text' => 'Fans',
    ],
];
?>

<header>
    <div class="topnav">
        <div>
            <span>DC POWER VISA </span>
        </div>
        <div>
            <span>ADDITIONAL SITES</span>
        </div>
        
        
    </div>
    <div class="main_menu">
        <div class="logo">

            <img src="{{asset('img/dc-logo.png')}}" alt="">
        </div>
        <nav>
            <ul>
                @foreach($menu as $item)
                    <li><a href="{{$item['href']}}" class="{{Route::currentRouteName() === $item['href'] ? 'active' : ' '}}">{{$item['text']}}</a></li>
                @endforeach
                <div class="input-container">
                    <input type="text" placeholder="Search">
                    <i class="fas fa-search"></i>
                </div>
            </ul>
        </nav>
    </div>
    <div class="jumbotron">
        <!-- <img src="{{asset('img/jumbotron.png')}}" alt=""> -->
    </div>
</header>