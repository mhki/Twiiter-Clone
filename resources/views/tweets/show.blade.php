@extends('layouts.main')
@section('main')
@if(Auth::check())
@forelse($users as $user)

<a href="{{ url('/profile/' . $user->username) }}" class="list-group-item">

    <h4 class="list-group-item-heading">
        <svg class="bd-placeholder-img flex-shrink-0 me-2 rounded" width="32" height="32" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 32x32" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" 
        fill="#6f42c1"/><text x="50%" y="50%" fill="#6f42c1" dy=".3em">32x32</text></svg>{{ $user->name }}
    </h4>
    <p class="list-group-item-text">&#64;{{ $user->username }} </p>
    <em>About</em>
    <p class="list-group-item-text">{{ $user->about }} </p>

</a>
@empty
 -- No Users -- 
@endforelse 
@else 
@forelse($users as $user)
<a href="#" class="list-group-item">
    <h4 class="list-group-item-heading">
        <svg class="bd-placeholder-img flex-shrink-0 me-2 rounded" width="32" height="32" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 32x32" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" 
            fill="#6f42c1"/><text x="50%" y="50%" fill="#6f42c1" dy=".3em">32x32</text></svg>{{ $user->name }}
    </h4>
    <p class="list-group-item-text">&#64;{{ $user->username }} </p>
    <em>About</em>
    <p class="list-group-item-text">{{ $user->about }} </p>
</a>
@empty
 --No Users--
@endforelse 
<h3 class="mt-2">Sign Up Today For More</h3>
<a href="/">
    <button class="btn btn-info">Sign Up</button>
</a>
@endif


@endsection