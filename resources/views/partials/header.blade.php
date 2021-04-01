<header class="d-flex flex-column flex-md-row align-items-center
 p-3 px-md-4 mb-3 bg-body border-bottom shadow-sm">
 
  <p class="h5 my-0 me-md-auto fw-normal">tWIttER-m</p>
  <nav class="my-2 my-md-0 me-md-3">
    @if( !Auth::check())
    <a class="p-2 text-dark" href="/">Login</a>
    @else
    <a class="p-2 text-dark" href="{{ route('home') }}">{{ Auth::user()->name }}</a>
    @endif
    <a class="p-2 text-dark" href="/explore">Explore</a>
    <a class="p-2 text-dark" href="/profiles">Profiles</a>
  </nav>

</header>