<!-- tutti i fumetti -->
@extends ('layout.app')

@section('title', 'Comic Page')

@section('content')
    <h1>Comics Page</h1>

    
        <div class="comic">
            <img src="{{$comic['thumb']}}" alt="">
            <h2>   
                {{$comic['series']}}
            </h2>
            <p>
                {{$comic['description']}}
            </p>
        </div>
   
@endsection