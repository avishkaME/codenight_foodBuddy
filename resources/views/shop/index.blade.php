@extends('layouts.app')

@section('content')
    <div class="col-12">
        <h4>Shops</h4>
        <div class="row">
        @foreach ($shops as $shop)
           <div class="card mb-3 col-3 mr-2">
            <h3 class="card-header">{{ $shop->name }}</h3>
            <div class="card-body">
                <h5 class="card-title">Special title treatment</h5>
                <h6 class="card-subtitle text-muted"> {{ $shop->location }}</h6>
            </div>
            <img style="height: 200px; width: 100%; display: block;"
                src="data:image/svg+xml;charset=UTF-8,%3Csvg%20width%3D%22318%22%20height%3D%22180%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20viewBox%3D%220%200%20318%20180%22%20preserveAspectRatio%3D%22none%22%3E%3Cdefs%3E%3Cstyle%20type%3D%22text%2Fcss%22%3E%23holder_158bd1d28ef%20text%20%7B%20fill%3Argba(255%2C255%2C255%2C.75)%3Bfont-weight%3Anormal%3Bfont-family%3AHelvetica%2C%20monospace%3Bfont-size%3A16pt%20%7D%20%3C%2Fstyle%3E%3C%2Fdefs%3E%3Cg%20id%3D%22holder_158bd1d28ef%22%3E%3Crect%20width%3D%22318%22%20height%3D%22180%22%20fill%3D%22%23777%22%3E%3C%2Frect%3E%3Cg%3E%3Ctext%20x%3D%22129.359375%22%20y%3D%2297.35%22%3EImage%3C%2Ftext%3E%3C%2Fg%3E%3C%2Fg%3E%3C%2Fsvg%3E"
                alt="Card image">
            <div class="card-body">
                <p class="card-text"> {{ $shop->description }}</p>
            </div>
            <div class="card-body">
                <a href="/shop/{{ $shop->id}}" class="card-link">View shop</a>
                <a href="#" class="card-link">Directions</a>
            </div>
            <div class="card-footer text-muted">
                2 days ago
            </div>
        </div> 
        @endforeach
        
        
        </div>
    </div>
@endsection
