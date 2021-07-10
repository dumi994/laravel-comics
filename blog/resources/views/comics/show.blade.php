<!-- tutti i fumetti -->
@extends ('layout.app')

@section('title', 'Comic Page')

@section('content')

    
        <div class="comic1">
            <img src="{{$comic['thumb']}}" alt="">
            <div class="gallery">
                <h4>View Gallery</h4>
            </div>
        </div>
        <div class="container">
            <div class="action-comics">
                
            </div>
        </div>
   
@endsection