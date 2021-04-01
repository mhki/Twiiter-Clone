@extends('layouts.profile')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8">
            <div class="panel">
                <div class="panel-heading">
                    Following
                </div>

                <div class="panel-body">
                    <div class="list-group">
                    @forelse ($list as $following)

                        <a href="{{ url('/profile/'. $following->username) }}" class="list-group-item">

                        <h4 class="list-group-item-heading"> 
                        <svg class="bd-placeholder-img flex-shrink-0 me-2 rounded" width="32" 
                        height="32" xmlns="http://www.w3.org/2000/svg" role="img" 
                        aria-label="Placeholder: 32x32" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#6f42c1"/><text x="50%" y="50%" fill="#6f42c1" dy=".3em">32x32</text></svg>{{ $following->name }}
                        </h4>
                        <p class="list-group-item-text">&#64;{{ $following->username }} </p>
                        <p class="list-grou-item-text"><em>About</em></p>
                        {{ $following->about }}
                        </a>
                    @empty
                        <p>No following </p>
                    @endforelse
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection