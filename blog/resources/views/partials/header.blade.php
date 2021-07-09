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
        <nav>
            <ul>
                @foreach($menu as $item)
                    <li><a href="{{$item['href']}}" class="{{Route::currentRouteName() === $item['href'] ? 'active' : ' '}}">{{$item['text']}}</a></li>
                @endforeach
            </ul>
        </nav>
    </div>
    <div class="jumbotron">
        <img src="/blog/public/img/jumbotron.png" alt="">
    </div>
</header>