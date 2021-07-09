<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/blog/public/app.css">
    <title>DC @yield('title', 'Comics')</title>
</head>
<body>
    <header>
        @include('partials.header')

    </header>
    <main>
        @yield('content')    
    </main>
    @include('partials.footer')
    <footer></footer>
</body>
</html>