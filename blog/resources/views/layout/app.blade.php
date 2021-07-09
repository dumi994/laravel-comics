<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- css -->
    <link rel="stylesheet" href="{{ asset("css/app.css") }}">
    <!-- FA -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <title>DC @yield('title', 'Comics')</title>
</head>
<body>
    <header>
        @include('partials.header')
    </header>
    <main>
        <!-- <div class="jumbotron">
            <img src="{{asset('img/jumbotron.png')}}" alt="">
        </div> -->
        @yield('content')
        @include('partials.main') 
    </main>
    @include('partials.footer')
    <footer></footer>
</body>
</html>