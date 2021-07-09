@extends ('layout.app')

@section('title', 'Home Page')

@section('content')
    <h1>Comics Page</h1>

    <div class="container">
    @foreach($comics as $index => $comic)
        <div class="comic">
                <a href="{{route('comic', ['id' => $index] )}}">
                <img src="{{$comic['thumb']}}" alt="">
                <h2>
                    {{$comic['series']}}
                </h2>
            </a>
        </div>
        @endforeach
    </div>
    
@endsection