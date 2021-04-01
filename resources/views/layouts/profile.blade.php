<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Styles -->
    <link rel="stylesheet" type="text/css" href="{!! asset('css/bootstrap.css') !!}">

</head>
<body>
@include('partials.header')
    <div class="nav-scroller bg--body shadow-sm">
        <nav class="nav nav-underline" aria-label="Secondary navigation">
        
            <a class="nav-link" href="{{ route('home') }}">{{ Auth::user()->name}}</a>
            
            <a class="nav-link" href="/explore">
                Tweets
                <span class="badge bg-primary text-light rounded-pill align-text-bottom">{{ $tweet_count }}</span>
            </a>
            <a class="nav-link" href="/following">
                Following
                <span class="badge bg-primary text-light rounded-pill align-text-bottom">{{ $following_count }}</span>
            </a>
            <a class="nav-link" href=" {{ url('/profile/'. $user->username.'/followers') }}">
                Followers
                <span class="badge bg-primary text-light rounded-pill align-text-bottom">{{ $followers_count }}</span>
            </a>
        
            
            @if(Auth::check())
            <a class="nav-link" href="/tweets/create">Tweet</a>
            @endif
            <a href="{{ url('/logout') }}" class="nav-link"
                onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                Logout </a>
                <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                    {{ csrf_field() }}
                </form>
                
                
        </nav>
    </div>
    <div class="container">

        <div class="d-flex pt-3">
            <svg class="bd-placeholder-img flex-shrink-0 me-2 rounded" width="32" height="32" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 32x32" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#6f42c1"/><text x="50%" y="50%" fill="#6f42c1" dy=".3em">32x32</text></svg>
            <a href="{{ url('/profile/'.$user->username) }}" class="">
                <h4 class="list-group-item-heading">{{ $user->name }} </h4>
                <p class="list-group-item-text">&#64;{{ $user->username }} </p>
            </a>
            
        </div>
        <div class="mr-5"><h4><em>About</em></h4>
            <em>{{ $user->about }}</em>
        </div>
        <div class="offset-4 col-md-2">
            @if (Auth::check())
                @if ($is_edit_profile)
                <a href="#" class="navbar-btn navbar-right">
                    <button type="button" class="btn btn-primary">Edit Profile</button>
                </a>
                @elseif ($is_follow_button)
                <a href="{{ url('/follows/profile/' . $user->username) }}" class="navbar-btn navbar-right">
                    <button type="button" class="btn btn-success">Follow</button>
                </a>
                @else
                <a href="{{ url('/unfollows/profile/' . $user->username) }}" class="navbar-btn navbar-right">
                    <button type="button" class="btn btn-success">Unfollow</button>
                </a>
                @endif
            @endif
        </div>
    </div>
    @yield('content')
    @include('partials.footer')

    <!-- Scripts -->
    <script src="{!! asset('js/bootstrap.bundle.min.js') !!}"></script>
    <script src="{!! asset('js/app.js') !!}"></script>


</body>
</html>