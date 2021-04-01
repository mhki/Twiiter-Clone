@extends('layouts.main')

@section('main')

<div class="container">
    <div class="row">
        <div class="col-md-6">
            <div class="p-2 pt-md-4 pb-md-3 mx-auto ">
                            <!-- Sign in form -->
                <h2 class="mb-3">Sign in</h1>
                <form method="POST" action="{{ route('login') }}">
                    @csrf
                    <div class="form-floating mb-3 w-75">
                        <input id="login" type="text"  class="form-control" 
                                name="login" value="{{ old('login') }}" 
                                placeholder="Username or EmailAddress" required autofocus>
                        <label for="login">Email or Username</label>
                        @error('login')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="form-floating mb-3 w-75">
                        <input type="password" class="form-control" id="password" name= "password" 
                        placeholder="Password" required autocomplete="current-password">
                        <label for="floatingPassword">Password</label>
                        @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" name="remember" 
                            class="custom-control-input" id="remember" {{ old('remember') ? 'checked' : '' }}>
                            <label class="custom-control-label" for="remember">Remember me</label>
                        </div>
                    </div>
                    <button class="btn btn-success btn-lg btn-block mb-3" type="submit">Sign in</button>
                    @if (Route::has('password.request'))
                        <a class="btn btn-link" href="{{ route('password.request') }}">
                            {{ __('Forgot Your Password?') }}
                        </a>
                    @endif
                </form>
                             <!-- End of sign in form -->
            </div>
        </div>
        <div class="col-md-6">
            <div class="p-2 pt-md-4 pb-md-3 mx-auto">
                <h2 class="mb-3">Sign up</h1>
                                <!-- Sign up form -->
                <form method="POST" action="{{ route('register') }}">
                        @csrf
                <div class="form-floating mb-3 w-75">
                    <input type="text" id="name" name="name"
                    class="form-control @error('name') is-invalid @enderror"  value="{{ old('name') }}"
                     placeholder="Name"
                    required autocomplete="name" autofocus>
                    <label for="name">Name</label> 
                    @error('name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="form-floating mb-3 w-75">
                    <input type="text" id="username" class="form-control @error('username') is-invalid @enderror"
                    name="username" value="{{ old('username') }}" placeholder="Username" 
                    required autocomplete="username" autofocus>
                    <label for="username">Username</label> 
                    @error('username')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="form-floating mb-3 w-75">
                    <input id="email" type="email" class="form-control  @error('email') is-invalid @enderror"
                     name="email" value="{{ old('email') }}"
                      placeholder="Email Address" required autocomplete="email">
                    <label for="email">Email Address</label>
                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="form-floating mb-3 w-75">
                    <input id="password" type="password" 
                    class="form-control @error('password') is-invalid @enderror"
                    name="password" placeholder="Password" required autocomplete="new-password">
                    <label for="password">Password</label>
                    
                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="form-floating mb-3 w-75">
                    <input id="password-confirm" type="pasword" class="form-control" placeholder="Confirm Password" 
                    name="password_confirmation" 
                    required autocomplete="new-password">
                    <label for="password-confirm">Confirm Password</label>
                </div>
                <button class="btn btn-success btn-lg btn-block mb-3" type="submit">Sign up</button>

                </form>
            </div>
        </div>
    </div>

</div>
@endsection