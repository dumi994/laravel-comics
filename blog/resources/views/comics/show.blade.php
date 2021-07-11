<!-- tutti i fumetti -->
@extends ('layout.app')

@section('title', 'Comic Page')

@section('content')

    <div class="comic-container">
        <div class="comic1">
            <img src="{{$comic['thumb']}}" alt="">
            <div class="gallery">
                <h4>View Gallery</h4>
            </div>
        </div>
        <div class="container">
            <div class="action-comics">
                <h2>{{$comic['title']}}</h2>
                <div class="availability">
                    <div class="price">
                        <span>US PRICE: {{$comic['price']}}</span>
                    </div>
                    <div class="available">
                        <span>Available</span>
                        <span>Check Availability</span>
                    </div>
                </div>
                <p class="comic-desc">{{$comic['description']}}</p>
            </div>
            <div class="advertisment">
                <img src="{{asset('img/adv.jpg')}}" alt="">
            </div>
        </div>
    </div>
    <div class="gray">
        <div class="talent">
            <h2>Talent</h2>
            <div class="art-by">
                <div class="label">Art by:</div>
                    @foreach($comic["artists"] as $artist)
                        @if(!$loop->last)
                        <a href="#">{{ $artist }},&nbsp;</a>                      
                        @else                
                        <a href="#">{{ $artist }}</a>
                        @endif
                    @endforeach 
            </div>
            <div class="writers">
                <div class="label">Written by:</div>
                    @foreach($comic["writers"] as $writer)
                        @if(!$loop->last)                    
                            <a href="#">{{ $writer }},&nbsp;</a>                    
                        @else                    
                            <a href="#">{{ $writer }}</a>                       
                        @endif
                    @endforeach
            
            </div>          
        </div>
        
        <div class="specs">
            <h2>Specs</h2>

            <div class="series">
                <div class="label">Series:</div>

                <a href="#">{{ $comic["series"] }}</a>
            </div>

            <div class="price-tag">
                <div class="label">U.S. Price:</div>

                <div>{{ $comic["price"] }}</div>
            </div>

            <div class="sale-date">
                <div class="label">On Sale Date:</div>

                <div>{{ $comic["sale_date"] }}</div>
            </div>
        </div>
    </div>   
   
@endsection