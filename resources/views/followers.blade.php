@extends('layouts.profile')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8">
            <div class="panel">
                <div class="panel-heading">
                    Followers
                </div>

                <div class="panel-body">
                    <div class="list-group">
                    @forelse ($list as $followers)
                        <a href="{{ url('/profile/'. $followers->username) }}" class="list-group-item">
                        
                        <h4 class="list-group-item-heading"><svg class="bd-placeholder-img flex-shrink-0 me-2 rounded" width="32" 
                        height="32" xmlns="http://www.w3.org/2000/svg" role="img" 
                        aria-label="Placeholder: 32x32" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#6f42c1"/><text x="50%" y="50%" 
                        fill="#6f42c1" dy=".3em">32x32</text></svg>{{ $followers->name }} </h4>
                        <p class="list-group-item-text">&#64;{{ $followers->username }} </p>
                        <p class="list-grou-item-text"><em>About</em></p>
                        {{ $followers->about }}
                        </a>
                    @empty
                        <p>No users</p>
                    @endforelse
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection