@extends ('layout.app')

@section('title', 'Home Page')

@section('content')
    <h1>Comics Page</h1>

    <div class="container">
    @foreach($comics as $index => $comic)
        <div class="comic">
                <a href="{{route('comic', ['id' => $index] )}}">
                <img src="{{$comic['thumb']}}" alt="">
                <h4>
                    {{$comic['series']}}
                </h4>
            </a>
        </div>
        @endforeach
    </div>
    <div class="button">
        <button>LOAD MORE</button>
    </div>
    
@endsection